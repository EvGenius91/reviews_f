<?php


class ReviewService
{
    protected $accessChecker;
    protected $reviewsRepository;

    function __construct(AccessChecker $accessChecker, DbReviewsRepository $repository)
    {
        $this->accessChecker = $accessChecker;
        $this->reviewsRepository = $repository;
    }


    function addReview(Review $review)
    {
        if($this->accessChecker->checkAddReview($review->objectReview, $review->author)) {
            $this->reviewsRepository->saveReview($review);
        }
    }


    function getReviews($filter)
    {
        return $this->reviewsRepository($filter);
    }
}