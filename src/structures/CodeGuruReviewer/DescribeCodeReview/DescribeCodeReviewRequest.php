<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\DescribeCodeReview;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CodeReviewArn
 */
class DescribeCodeReviewRequest extends Request
{
    /**
     * @param array{CodeReviewArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
