<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListLensReviewImprovements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $JiraIssueUrl
 * @property \Aws\Api\DateTimeResult $LastSyncedTime
 */
class JiraConfiguration extends Shape
{
    /**
     * @param array{
     *     JiraIssueUrl?: string,
     *     LastSyncedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
