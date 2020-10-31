<?php
class ReviewModel
{
    public $text;
    public $rate;

    public $user;
    public $objectReviewIdentity;

    function __construct(ObjectReviewIdentity $objectReviewIdentity, $user, $text, $rate)
    {
        $this->user = $user;
        $this->objectReviewIdentity = $objectReviewIdentity;
        $this->text = $text;
        $this->rate = $rate;
    }
}