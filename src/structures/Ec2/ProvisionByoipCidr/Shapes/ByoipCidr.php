<?php

namespace Sunaoka\Aws\Structures\Ec2\ProvisionByoipCidr\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Cidr
 * @property string $Description
 * @property list<AsnAssociation> $AsnAssociations
 * @property string $StatusMessage
 * @property 'advertised'|'deprovisioned'|'failed-deprovision'|'failed-provision'|'pending-deprovision'|'pending-provision'|'provisioned'|'provisioned-not-publicly-advertisable' $State
 * @property string $NetworkBorderGroup
 */
class ByoipCidr extends Shape
{
    /**
     * @param array{
     *     Cidr?: string,
     *     Description?: string,
     *     AsnAssociations?: list<AsnAssociation>,
     *     StatusMessage?: string,
     *     State?: 'advertised'|'deprovisioned'|'failed-deprovision'|'failed-provision'|'pending-deprovision'|'pending-provision'|'provisioned'|'provisioned-not-publicly-advertisable',
     *     NetworkBorderGroup?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
