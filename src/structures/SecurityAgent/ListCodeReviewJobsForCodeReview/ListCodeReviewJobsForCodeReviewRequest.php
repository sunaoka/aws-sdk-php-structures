<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListCodeReviewJobsForCodeReview;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $maxResults
 * @property string $codeReviewId
 * @property string $agentSpaceId
 * @property string|null $nextToken
 */
class ListCodeReviewJobsForCodeReviewRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int|null,
     *     codeReviewId: string,
     *     agentSpaceId: string,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
