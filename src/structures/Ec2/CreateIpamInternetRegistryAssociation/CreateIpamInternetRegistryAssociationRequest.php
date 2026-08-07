<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateIpamInternetRegistryAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $IpamId
 * @property 'ripe'|'apnic'|'arin'|'lacnic' $Rir
 * @property string $OrganizationHandle
 * @property string|null $Description
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property string|null $ClientToken
 */
class CreateIpamInternetRegistryAssociationRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     IpamId: string,
     *     Rir: 'ripe'|'apnic'|'arin'|'lacnic',
     *     OrganizationHandle: string,
     *     Description?: string|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
