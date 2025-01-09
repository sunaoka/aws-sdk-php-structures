<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\CreateService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationIdentifier
 * @property string $ClientToken
 * @property string $Description
 * @property 'LAMBDA'|'URL' $EndpointType
 * @property string $EnvironmentIdentifier
 * @property Shapes\LambdaEndpointInput $LambdaEndpoint
 * @property string $Name
 * @property array<string, string> $Tags
 * @property Shapes\UrlEndpointInput $UrlEndpoint
 * @property string $VpcId
 */
class CreateServiceRequest extends Request
{
    /**
     * @param array{
     *     ApplicationIdentifier: string,
     *     ClientToken?: string,
     *     Description?: string,
     *     EndpointType: 'LAMBDA'|'URL',
     *     EnvironmentIdentifier: string,
     *     LambdaEndpoint?: Shapes\LambdaEndpointInput,
     *     Name: string,
     *     Tags?: array<string, string>,
     *     UrlEndpoint?: Shapes\UrlEndpointInput,
     *     VpcId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
