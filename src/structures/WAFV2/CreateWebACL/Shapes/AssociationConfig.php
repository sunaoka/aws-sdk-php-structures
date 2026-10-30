<?php

namespace Sunaoka\Aws\Structures\WAFV2\CreateWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<'CLOUDFRONT'|'API_GATEWAY'|'COGNITO_USER_POOL'|'APP_RUNNER_SERVICE'|'VERIFIED_ACCESS_INSTANCE'|'AGENTCORE_GATEWAY', RequestBodyAssociatedResourceTypeConfig>|null $RequestBody
 * @property array<'CLOUDFRONT'|'API_GATEWAY'|'COGNITO_USER_POOL'|'APP_RUNNER_SERVICE'|'VERIFIED_ACCESS_INSTANCE'|'AGENTCORE_GATEWAY', ChallengeJavascriptSdkInjectionConfig>|null $ChallengeJavascriptSdkInjection
 */
class AssociationConfig extends Shape
{
    /**
     * @param array{
     *     RequestBody?: array<'CLOUDFRONT'|'API_GATEWAY'|'COGNITO_USER_POOL'|'APP_RUNNER_SERVICE'|'VERIFIED_ACCESS_INSTANCE'|'AGENTCORE_GATEWAY', RequestBodyAssociatedResourceTypeConfig>|null,
     *     ChallengeJavascriptSdkInjection?: array<'CLOUDFRONT'|'API_GATEWAY'|'COGNITO_USER_POOL'|'APP_RUNNER_SERVICE'|'VERIFIED_ACCESS_INSTANCE'|'AGENTCORE_GATEWAY', ChallengeJavascriptSdkInjectionConfig>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
