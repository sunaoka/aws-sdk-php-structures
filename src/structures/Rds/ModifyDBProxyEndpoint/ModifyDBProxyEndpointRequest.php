<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyDBProxyEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBProxyEndpointName
 * @property string $NewDBProxyEndpointName
 * @property list<string> $VpcSecurityGroupIds
 */
class ModifyDBProxyEndpointRequest extends Request
{
    /**
     * @param array{
     *     DBProxyEndpointName: string,
     *     NewDBProxyEndpointName?: string,
     *     VpcSecurityGroupIds?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
