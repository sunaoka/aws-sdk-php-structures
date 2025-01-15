<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\CreateService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationIdentifier
 * @property string|null $ClientToken
 * @property string|null $Description
 * @property 'LAMBDA'|'URL' $EndpointType
 * @property string $EnvironmentIdentifier
 * @property Shapes\LambdaEndpointInput|null $LambdaEndpoint
 * @property string $Name
 * @property array<string, string>|null $Tags
 * @property Shapes\UrlEndpointInput|null $UrlEndpoint
 * @property string|null $VpcId
 */
class CreateServiceRequest extends Request
{
    /**
     * @param array{
     *     ApplicationIdentifier: string,
     *     ClientToken?: string|null,
     *     Description?: string|null,
     *     EndpointType: 'LAMBDA'|'URL',
     *     EnvironmentIdentifier: string,
     *     LambdaEndpoint?: Shapes\LambdaEndpointInput|null,
     *     Name: string,
     *     Tags?: array<string, string>|null,
     *     UrlEndpoint?: Shapes\UrlEndpointInput|null,
     *     VpcId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
