<?php

namespace Sunaoka\Aws\Structures\Emr\ListClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $CreationDateTime
 * @property \Aws\Api\DateTimeResult|null $ReadyDateTime
 * @property \Aws\Api\DateTimeResult|null $EndDateTime
 */
class ClusterTimeline extends Shape
{
    /**
     * @param array{
     *     CreationDateTime?: \Aws\Api\DateTimeResult|null,
     *     ReadyDateTime?: \Aws\Api\DateTimeResult|null,
     *     EndDateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
