<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeEffectiveInstanceAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AssociationId
 * @property string $InstanceId
 * @property string $Content
 * @property string $AssociationVersion
 */
class InstanceAssociation extends Shape
{
    /**
     * @param array{
     *     AssociationId?: string,
     *     InstanceId?: string,
     *     Content?: string,
     *     AssociationVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
