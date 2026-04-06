<?php

namespace Sunaoka\Aws\Structures\Ec2\WithdrawByoipCidr\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Asn
 * @property string|null $Cidr
 * @property string|null $StatusMessage
 * @property 'disassociated'|'failed-disassociation'|'failed-association'|'pending-disassociation'|'pending-association'|'associated'|null $State
 */
class AsnAssociation extends Shape
{
    /**
     * @param array{
     *     Asn?: string|null,
     *     Cidr?: string|null,
     *     StatusMessage?: string|null,
     *     State?: 'disassociated'|'failed-disassociation'|'failed-association'|'pending-disassociation'|'pending-association'|'associated'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
