<?php

namespace Sunaoka\Aws\Structures\Ec2\MoveByoipCidrToIpam\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Asn
 * @property string $Cidr
 * @property string $StatusMessage
 * @property 'disassociated'|'failed-disassociation'|'failed-association'|'pending-disassociation'|'pending-association'|'associated' $State
 */
class AsnAssociation extends Shape
{
    /**
     * @param array{
     *     Asn?: string,
     *     Cidr?: string,
     *     StatusMessage?: string,
     *     State?: 'disassociated'|'failed-disassociation'|'failed-association'|'pending-disassociation'|'pending-association'|'associated'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
