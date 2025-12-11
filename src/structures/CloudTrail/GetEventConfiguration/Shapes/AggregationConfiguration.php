<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GetEventConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'API_ACTIVITY'|'RESOURCE_ACCESS'|'USER_ACTIONS'> $Templates
 * @property 'Data' $EventCategory
 */
class AggregationConfiguration extends Shape
{
    /**
     * @param array{
     *     Templates: list<'API_ACTIVITY'|'RESOURCE_ACCESS'|'USER_ACTIONS'>,
     *     EventCategory: 'Data'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
