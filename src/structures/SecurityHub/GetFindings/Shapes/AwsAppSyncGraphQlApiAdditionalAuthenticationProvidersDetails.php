<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AuthenticationType
 * @property AwsAppSyncGraphQlApiLambdaAuthorizerConfigDetails|null $LambdaAuthorizerConfig
 * @property AwsAppSyncGraphQlApiOpenIdConnectConfigDetails|null $OpenIdConnectConfig
 * @property AwsAppSyncGraphQlApiUserPoolConfigDetails|null $UserPoolConfig
 */
class AwsAppSyncGraphQlApiAdditionalAuthenticationProvidersDetails extends Shape
{
    /**
     * @param array{
     *     AuthenticationType?: string|null,
     *     LambdaAuthorizerConfig?: AwsAppSyncGraphQlApiLambdaAuthorizerConfigDetails|null,
     *     OpenIdConnectConfig?: AwsAppSyncGraphQlApiOpenIdConnectConfigDetails|null,
     *     UserPoolConfig?: AwsAppSyncGraphQlApiUserPoolConfigDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
