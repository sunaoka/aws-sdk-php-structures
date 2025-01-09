<?php

namespace Sunaoka\Aws\Structures\ConfigService\ListAggregateDiscoveredResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property string $ResourceId
 * @property string $ResourceName
 * @property string $Region
 */
class ResourceFilters extends Shape
{
    /**
     * @param array{
     *     AccountId?: string,
     *     ResourceId?: string,
     *     ResourceName?: string,
     *     Region?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
