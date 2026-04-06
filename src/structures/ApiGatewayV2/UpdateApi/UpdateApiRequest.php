<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\UpdateApi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApiId
 * @property string|null $ApiKeySelectionExpression
 * @property Shapes\Cors|null $CorsConfiguration
 * @property string|null $CredentialsArn
 * @property string|null $Description
 * @property bool|null $DisableSchemaValidation
 * @property bool|null $DisableExecuteApiEndpoint
 * @property 'ipv4'|'dualstack'|null $IpAddressType
 * @property string|null $Name
 * @property string|null $RouteKey
 * @property string|null $RouteSelectionExpression
 * @property string|null $Target
 * @property string|null $Version
 */
class UpdateApiRequest extends Request
{
    /**
     * @param array{
     *     ApiId: string,
     *     ApiKeySelectionExpression?: string|null,
     *     CorsConfiguration?: Shapes\Cors|null,
     *     CredentialsArn?: string|null,
     *     Description?: string|null,
     *     DisableSchemaValidation?: bool|null,
     *     DisableExecuteApiEndpoint?: bool|null,
     *     IpAddressType?: 'ipv4'|'dualstack'|null,
     *     Name?: string|null,
     *     RouteKey?: string|null,
     *     RouteSelectionExpression?: string|null,
     *     Target?: string|null,
     *     Version?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
