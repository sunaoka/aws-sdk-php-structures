<?php

namespace Sunaoka\Aws\Structures\Ssm\ListAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'InstanceId'|'Name'|'AssociationId'|'AssociationStatusName'|'LastExecutedBefore'|'LastExecutedAfter'|'AssociationName'|'ResourceGroupName' $key
 * @property string $value
 */
class AssociationFilter extends Shape
{
    /**
     * @param array{
     *     key: 'InstanceId'|'Name'|'AssociationId'|'AssociationStatusName'|'LastExecutedBefore'|'LastExecutedAfter'|'AssociationName'|'ResourceGroupName',
     *     value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
