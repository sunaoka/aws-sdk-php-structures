<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeAssociationExecutionTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Status'|'ResourceId'|'ResourceType' $Key
 * @property string $Value
 */
class AssociationExecutionTargetsFilter extends Shape
{
    /**
     * @param array{
     *     Key: 'Status'|'ResourceId'|'ResourceType',
     *     Value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
