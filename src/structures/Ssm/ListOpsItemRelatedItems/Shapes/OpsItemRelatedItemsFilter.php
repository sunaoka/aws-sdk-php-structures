<?php

namespace Sunaoka\Aws\Structures\Ssm\ListOpsItemRelatedItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ResourceType'|'AssociationId'|'ResourceUri' $Key
 * @property list<string> $Values
 * @property 'Equal' $Operator
 */
class OpsItemRelatedItemsFilter extends Shape
{
    /**
     * @param array{
     *     Key: 'ResourceType'|'AssociationId'|'ResourceUri',
     *     Values: list<string>,
     *     Operator: 'Equal'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
