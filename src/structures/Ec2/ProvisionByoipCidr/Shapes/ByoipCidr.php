<?php

namespace Sunaoka\Aws\Structures\Ec2\ProvisionByoipCidr\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Cidr
 * @property string|null $Description
 * @property list<AsnAssociation>|null $AsnAssociations
 * @property string|null $StatusMessage
 * @property 'advertised'|'deprovisioned'|'failed-deprovision'|'failed-provision'|'pending-advertising'|'pending-deprovision'|'pending-provision'|'pending-withdrawal'|'provisioned'|'provisioned-not-publicly-advertisable'|null $State
 * @property string|null $NetworkBorderGroup
 * @property string|null $AdvertisementType
 */
class ByoipCidr extends Shape
{
    /**
     * @param array{
     *     Cidr?: string|null,
     *     Description?: string|null,
     *     AsnAssociations?: list<AsnAssociation>|null,
     *     StatusMessage?: string|null,
     *     State?: 'advertised'|'deprovisioned'|'failed-deprovision'|'failed-provision'|'pending-advertising'|'pending-deprovision'|'pending-provision'|'pending-withdrawal'|'provisioned'|'provisioned-not-publicly-advertisable'|null,
     *     NetworkBorderGroup?: string|null,
     *     AdvertisementType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
