<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateServiceNetworkVpcAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $serviceNetworkIdentifier
 * @property string $vpcIdentifier
 * @property list<string>|null $securityGroupIds
 * @property array<string, string>|null $tags
 */
class CreateServiceNetworkVpcAssociationRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     serviceNetworkIdentifier: string,
     *     vpcIdentifier: string,
     *     securityGroupIds?: list<string>|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
