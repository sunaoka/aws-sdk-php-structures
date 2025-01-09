<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AuthenticationType
 * @property AwsAppSyncGraphQlApiLambdaAuthorizerConfigDetails $LambdaAuthorizerConfig
 * @property AwsAppSyncGraphQlApiOpenIdConnectConfigDetails $OpenIdConnectConfig
 * @property AwsAppSyncGraphQlApiUserPoolConfigDetails $UserPoolConfig
 */
class AwsAppSyncGraphQlApiAdditionalAuthenticationProvidersDetails extends Shape
{
    /**
     * @param array{
     *     AuthenticationType?: string,
     *     LambdaAuthorizerConfig?: AwsAppSyncGraphQlApiLambdaAuthorizerConfigDetails,
     *     OpenIdConnectConfig?: AwsAppSyncGraphQlApiOpenIdConnectConfigDetails,
     *     UserPoolConfig?: AwsAppSyncGraphQlApiUserPoolConfigDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
