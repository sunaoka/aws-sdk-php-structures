<?php

namespace Sunaoka\Aws\Structures\Emr\ListClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreationDateTime
 * @property \Aws\Api\DateTimeResult $ReadyDateTime
 * @property \Aws\Api\DateTimeResult $EndDateTime
 */
class ClusterTimeline extends Shape
{
    /**
     * @param array{
     *     CreationDateTime?: \Aws\Api\DateTimeResult,
     *     ReadyDateTime?: \Aws\Api\DateTimeResult,
     *     EndDateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
