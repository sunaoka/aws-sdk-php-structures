<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\ListNamespaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TYPE'|'NAME'|'HTTP_NAME' $Name
 * @property list<string> $Values
 * @property 'EQ'|'IN'|'BETWEEN'|'BEGINS_WITH' $Condition
 */
class NamespaceFilter extends Shape
{
    /**
     * @param array{
     *     Name: 'TYPE'|'NAME'|'HTTP_NAME',
     *     Values: list<string>,
     *     Condition?: 'EQ'|'IN'|'BETWEEN'|'BEGINS_WITH'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
