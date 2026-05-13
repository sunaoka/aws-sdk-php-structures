<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchDeleteCodeReviews;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $codeReviewIds
 * @property string $agentSpaceId
 */
class BatchDeleteCodeReviewsRequest extends Request
{
    /**
     * @param array{
     *     codeReviewIds: list<string>,
     *     agentSpaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
