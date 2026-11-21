<?php

namespace Sunaoka\Aws\Structures\WAFV2\ListEventsByWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EVENT_CATEGORY'|'RESOURCE_ARN' $Name
 * @property list<string> $Values
 */
class EventFilter extends Shape
{
    /**
     * @param array{
     *     Name: 'EVENT_CATEGORY'|'RESOURCE_ARN',
     *     Values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
