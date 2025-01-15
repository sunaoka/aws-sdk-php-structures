<?php

namespace Sunaoka\Aws\Structures\Ec2\ProvisionByoipCidr;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Cidr
 * @property Shapes\CidrAuthorizationContext|null $CidrAuthorizationContext
 * @property bool|null $PubliclyAdvertisable
 * @property string|null $Description
 * @property bool|null $DryRun
 * @property list<Shapes\TagSpecification>|null $PoolTagSpecifications
 * @property bool|null $MultiRegion
 * @property string|null $NetworkBorderGroup
 */
class ProvisionByoipCidrRequest extends Request
{
    /**
     * @param array{
     *     Cidr: string,
     *     CidrAuthorizationContext?: Shapes\CidrAuthorizationContext|null,
     *     PubliclyAdvertisable?: bool|null,
     *     Description?: string|null,
     *     DryRun?: bool|null,
     *     PoolTagSpecifications?: list<Shapes\TagSpecification>|null,
     *     MultiRegion?: bool|null,
     *     NetworkBorderGroup?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
