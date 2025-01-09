<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\CreateElasticsearchDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $AvailabilityZoneCount
 */
class ZoneAwarenessConfig extends Shape
{
    /**
     * @param array{AvailabilityZoneCount?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
