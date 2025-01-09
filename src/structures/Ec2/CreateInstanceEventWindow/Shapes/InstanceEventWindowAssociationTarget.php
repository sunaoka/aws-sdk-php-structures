<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateInstanceEventWindow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $InstanceIds
 * @property list<Tag> $Tags
 * @property list<string> $DedicatedHostIds
 */
class InstanceEventWindowAssociationTarget extends Shape
{
    /**
     * @param array{
     *     InstanceIds?: list<string>,
     *     Tags?: list<Tag>,
     *     DedicatedHostIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
