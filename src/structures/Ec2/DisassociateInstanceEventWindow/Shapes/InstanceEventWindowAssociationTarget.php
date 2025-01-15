<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateInstanceEventWindow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $InstanceIds
 * @property list<Tag>|null $Tags
 * @property list<string>|null $DedicatedHostIds
 */
class InstanceEventWindowAssociationTarget extends Shape
{
    /**
     * @param array{
     *     InstanceIds?: list<string>|null,
     *     Tags?: list<Tag>|null,
     *     DedicatedHostIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
