<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyDBProxyEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBProxyEndpointName
 * @property string|null $NewDBProxyEndpointName
 * @property list<string>|null $VpcSecurityGroupIds
 */
class ModifyDBProxyEndpointRequest extends Request
{
    /**
     * @param array{
     *     DBProxyEndpointName: string,
     *     NewDBProxyEndpointName?: string|null,
     *     VpcSecurityGroupIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
