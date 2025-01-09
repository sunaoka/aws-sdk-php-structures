<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateClientVpnTargetNetwork\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'associating'|'associated'|'association-failed'|'disassociating'|'disassociated' $Code
 * @property string $Message
 */
class AssociationStatus extends Shape
{
    /**
     * @param array{
     *     Code?: 'associating'|'associated'|'association-failed'|'disassociating'|'disassociated',
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
