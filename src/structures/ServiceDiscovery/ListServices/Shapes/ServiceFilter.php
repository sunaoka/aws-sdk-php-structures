<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\ListServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NAMESPACE_ID' $Name
 * @property list<string> $Values
 * @property 'EQ'|'IN'|'BETWEEN'|'BEGINS_WITH' $Condition
 */
class ServiceFilter extends Shape
{
    /**
     * @param array{
     *     Name: 'NAMESPACE_ID',
     *     Values: list<string>,
     *     Condition?: 'EQ'|'IN'|'BETWEEN'|'BEGINS_WITH'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
