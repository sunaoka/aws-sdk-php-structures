<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\ListOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NAMESPACE_ID'|'SERVICE_ID'|'STATUS'|'TYPE'|'UPDATE_DATE' $Name
 * @property list<string> $Values
 * @property 'EQ'|'IN'|'BETWEEN'|'BEGINS_WITH' $Condition
 */
class OperationFilter extends Shape
{
    /**
     * @param array{
     *     Name: 'NAMESPACE_ID'|'SERVICE_ID'|'STATUS'|'TYPE'|'UPDATE_DATE',
     *     Values: list<string>,
     *     Condition?: 'EQ'|'IN'|'BETWEEN'|'BEGINS_WITH'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
