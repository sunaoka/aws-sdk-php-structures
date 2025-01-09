<?php

namespace Sunaoka\Aws\Structures\CodeStarconnections\GetResourceSyncStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Event
 * @property string $ExternalId
 * @property \Aws\Api\DateTimeResult $Time
 * @property string $Type
 */
class ResourceSyncEvent extends Shape
{
    /**
     * @param array{
     *     Event: string,
     *     ExternalId?: string,
     *     Time: \Aws\Api\DateTimeResult,
     *     Type: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
