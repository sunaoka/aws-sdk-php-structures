<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamRouteOriginAuthorizations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $IpamInternetRegistryAssociationId
 * @property string|null $Cidr
 * @property int<5, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class GetIpamRouteOriginAuthorizationsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     IpamInternetRegistryAssociationId: string,
     *     Cidr?: string|null,
     *     MaxResults?: int<5, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
