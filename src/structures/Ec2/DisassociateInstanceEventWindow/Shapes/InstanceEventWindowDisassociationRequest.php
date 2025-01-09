<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateInstanceEventWindow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $InstanceIds
 * @property list<Tag> $InstanceTags
 * @property list<string> $DedicatedHostIds
 */
class InstanceEventWindowDisassociationRequest extends Shape
{
    /**
     * @param array{
     *     InstanceIds?: list<string>,
     *     InstanceTags?: list<Tag>,
     *     DedicatedHostIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
