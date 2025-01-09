<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\UpdateApi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApiId
 * @property string $ApiKeySelectionExpression
 * @property Shapes\Cors $CorsConfiguration
 * @property string $CredentialsArn
 * @property string $Description
 * @property bool $DisableSchemaValidation
 * @property bool $DisableExecuteApiEndpoint
 * @property string $Name
 * @property string $RouteKey
 * @property string $RouteSelectionExpression
 * @property string $Target
 * @property string $Version
 */
class UpdateApiRequest extends Request
{
    /**
     * @param array{
     *     ApiId: string,
     *     ApiKeySelectionExpression?: string,
     *     CorsConfiguration?: Shapes\Cors,
     *     CredentialsArn?: string,
     *     Description?: string,
     *     DisableSchemaValidation?: bool,
     *     DisableExecuteApiEndpoint?: bool,
     *     Name?: string,
     *     RouteKey?: string,
     *     RouteSelectionExpression?: string,
     *     Target?: string,
     *     Version?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
