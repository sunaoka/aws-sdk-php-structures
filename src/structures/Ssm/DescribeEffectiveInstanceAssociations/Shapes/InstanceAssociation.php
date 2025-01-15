<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeEffectiveInstanceAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AssociationId
 * @property string|null $InstanceId
 * @property string|null $Content
 * @property string|null $AssociationVersion
 */
class InstanceAssociation extends Shape
{
    /**
     * @param array{
     *     AssociationId?: string|null,
     *     InstanceId?: string|null,
     *     Content?: string|null,
     *     AssociationVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
