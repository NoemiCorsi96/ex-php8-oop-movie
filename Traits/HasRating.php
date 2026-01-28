<?php

trait HasRating {
    public int $rating = 0;

    public function getStars(): string {
        $stars = '';

        for ($i = 1; $i <= 5; $i++) {
            if ($i <= $this->rating) {
                $stars .= '★';
            } else {
                $stars .= '☆';
            }
        }

        return $stars;
    }
}
