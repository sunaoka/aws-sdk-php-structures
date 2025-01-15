<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateClientVpnTargetNetwork\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'associating'|'associated'|'association-failed'|'disassociating'|'disassociated'|null $Code
 * @property string|null $Message
 */
class AssociationStatus extends Shape
{
    /**
     * @param array{
     *     Code?: 'associating'|'associated'|'association-failed'|'disassociating'|'disassociated'|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
