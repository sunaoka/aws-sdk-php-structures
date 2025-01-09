<?php

namespace Sunaoka\Aws\Structures\Ec2\ProvisionByoipCidr;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Cidr
 * @property Shapes\CidrAuthorizationContext $CidrAuthorizationContext
 * @property bool $PubliclyAdvertisable
 * @property string $Description
 * @property bool $DryRun
 * @property list<Shapes\TagSpecification> $PoolTagSpecifications
 * @property bool $MultiRegion
 * @property string $NetworkBorderGroup
 */
class ProvisionByoipCidrRequest extends Request
{
    /**
     * @param array{
     *     Cidr: string,
     *     CidrAuthorizationContext?: Shapes\CidrAuthorizationContext,
     *     PubliclyAdvertisable?: bool,
     *     Description?: string,
     *     DryRun?: bool,
     *     PoolTagSpecifications?: list<Shapes\TagSpecification>,
     *     MultiRegion?: bool,
     *     NetworkBorderGroup?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
