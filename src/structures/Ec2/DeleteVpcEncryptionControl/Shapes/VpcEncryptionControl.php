<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteVpcEncryptionControl\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VpcId
 * @property string|null $VpcEncryptionControlId
 * @property 'monitor'|'enforce'|null $Mode
 * @property 'enforce-in-progress'|'monitor-in-progress'|'enforce-failed'|'monitor-failed'|'deleting'|'deleted'|'available'|'creating'|'delete-failed'|null $State
 * @property string|null $StateMessage
 * @property VpcEncryptionControlExclusions|null $ResourceExclusions
 * @property list<Tag>|null $Tags
 */
class VpcEncryptionControl extends Shape
{
    /**
     * @param array{
     *     VpcId?: string|null,
     *     VpcEncryptionControlId?: string|null,
     *     Mode?: 'monitor'|'enforce'|null,
     *     State?: 'enforce-in-progress'|'monitor-in-progress'|'enforce-failed'|'monitor-failed'|'deleting'|'deleted'|'available'|'creating'|'delete-failed'|null,
     *     StateMessage?: string|null,
     *     ResourceExclusions?: VpcEncryptionControlExclusions|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
