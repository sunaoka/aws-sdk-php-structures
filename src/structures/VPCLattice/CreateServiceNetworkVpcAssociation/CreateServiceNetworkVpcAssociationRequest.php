<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateServiceNetworkVpcAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property list<string>|null $securityGroupIds
 * @property string $serviceNetworkIdentifier
 * @property array<string, string>|null $tags
 * @property string $vpcIdentifier
 */
class CreateServiceNetworkVpcAssociationRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     securityGroupIds?: list<string>|null,
     *     serviceNetworkIdentifier: string,
     *     tags?: array<string, string>|null,
     *     vpcIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
