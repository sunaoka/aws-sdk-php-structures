<?php

namespace Sunaoka\Aws\Structures\Rds\CreateDBProxyEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBProxyName
 * @property string $DBProxyEndpointName
 * @property list<string> $VpcSubnetIds
 * @property list<string> $VpcSecurityGroupIds
 * @property 'READ_WRITE'|'READ_ONLY' $TargetRole
 * @property list<Shapes\Tag> $Tags
 */
class CreateDBProxyEndpointRequest extends Request
{
    /**
     * @param array{
     *     DBProxyName: string,
     *     DBProxyEndpointName: string,
     *     VpcSubnetIds: list<string>,
     *     VpcSecurityGroupIds?: list<string>,
     *     TargetRole?: 'READ_WRITE'|'READ_ONLY',
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
