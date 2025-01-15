<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateInstanceEventWindow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $InstanceIds
 * @property list<Tag>|null $InstanceTags
 * @property list<string>|null $DedicatedHostIds
 */
class InstanceEventWindowAssociationRequest extends Shape
{
    /**
     * @param array{
     *     InstanceIds?: list<string>|null,
     *     InstanceTags?: list<Tag>|null,
     *     DedicatedHostIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
