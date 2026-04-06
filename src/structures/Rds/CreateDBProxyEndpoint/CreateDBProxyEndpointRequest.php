<?php

namespace Sunaoka\Aws\Structures\Rds\CreateDBProxyEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBProxyName
 * @property string $DBProxyEndpointName
 * @property list<string> $VpcSubnetIds
 * @property list<string>|null $VpcSecurityGroupIds
 * @property 'READ_WRITE'|'READ_ONLY'|null $TargetRole
 * @property list<Shapes\Tag>|null $Tags
 * @property 'IPV4'|'IPV6'|'DUAL'|null $EndpointNetworkType
 */
class CreateDBProxyEndpointRequest extends Request
{
    /**
     * @param array{
     *     DBProxyName: string,
     *     DBProxyEndpointName: string,
     *     VpcSubnetIds: list<string>,
     *     VpcSecurityGroupIds?: list<string>|null,
     *     TargetRole?: 'READ_WRITE'|'READ_ONLY'|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     EndpointNetworkType?: 'IPV4'|'IPV6'|'DUAL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
