<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateServiceNetworkVpcAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property list<string> $securityGroupIds
 * @property string $serviceNetworkIdentifier
 * @property array<string, string> $tags
 * @property string $vpcIdentifier
 */
class CreateServiceNetworkVpcAssociationRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     securityGroupIds?: list<string>,
     *     serviceNetworkIdentifier: string,
     *     tags?: array<string, string>,
     *     vpcIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
