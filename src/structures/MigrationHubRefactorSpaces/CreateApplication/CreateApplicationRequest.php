<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\CreateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ApiGatewayProxyInput $ApiGatewayProxy
 * @property string $ClientToken
 * @property string $EnvironmentIdentifier
 * @property string $Name
 * @property 'API_GATEWAY' $ProxyType
 * @property array<string, string> $Tags
 * @property string $VpcId
 */
class CreateApplicationRequest extends Request
{
    /**
     * @param array{
     *     ApiGatewayProxy?: Shapes\ApiGatewayProxyInput,
     *     ClientToken?: string,
     *     EnvironmentIdentifier: string,
     *     Name: string,
     *     ProxyType: 'API_GATEWAY',
     *     Tags?: array<string, string>,
     *     VpcId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
