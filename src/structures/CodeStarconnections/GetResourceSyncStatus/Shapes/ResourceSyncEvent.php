<?php

namespace Sunaoka\Aws\Structures\CodeStarconnections\GetResourceSyncStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Event
 * @property string|null $ExternalId
 * @property \Aws\Api\DateTimeResult $Time
 * @property string $Type
 */
class ResourceSyncEvent extends Shape
{
    /**
     * @param array{
     *     Event: string,
     *     ExternalId?: string|null,
     *     Time: \Aws\Api\DateTimeResult,
     *     Type: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
