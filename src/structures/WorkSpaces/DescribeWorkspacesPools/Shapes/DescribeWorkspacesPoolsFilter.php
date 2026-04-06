<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspacesPools\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PoolName' $Name
 * @property list<string> $Values
 * @property 'EQUALS'|'NOTEQUALS'|'CONTAINS'|'NOTCONTAINS' $Operator
 */
class DescribeWorkspacesPoolsFilter extends Shape
{
    /**
     * @param array{
     *     Name: 'PoolName',
     *     Values: list<string>,
     *     Operator: 'EQUALS'|'NOTEQUALS'|'CONTAINS'|'NOTCONTAINS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
