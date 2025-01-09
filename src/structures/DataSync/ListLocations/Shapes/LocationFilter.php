<?php

namespace Sunaoka\Aws\Structures\DataSync\ListLocations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LocationUri'|'LocationType'|'CreationTime' $Name
 * @property list<string> $Values
 * @property 'Equals'|'NotEquals'|'In'|'LessThanOrEqual'|'LessThan'|'GreaterThanOrEqual'|'GreaterThan'|'Contains'|'NotContains'|'BeginsWith' $Operator
 */
class LocationFilter extends Shape
{
    /**
     * @param array{
     *     Name: 'LocationUri'|'LocationType'|'CreationTime',
     *     Values: list<string>,
     *     Operator: 'Equals'|'NotEquals'|'In'|'LessThanOrEqual'|'LessThan'|'GreaterThanOrEqual'|'GreaterThan'|'Contains'|'NotContains'|'BeginsWith'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
