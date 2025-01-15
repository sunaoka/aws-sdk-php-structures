<?php

namespace Sunaoka\Aws\Structures\ConfigService\ListAggregateDiscoveredResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountId
 * @property string|null $ResourceId
 * @property string|null $ResourceName
 * @property string|null $Region
 */
class ResourceFilters extends Shape
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     ResourceId?: string|null,
     *     ResourceName?: string|null,
     *     Region?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
