<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApiId
 * @property string $Id
 * @property AwsAppSyncGraphQlApiOpenIdConnectConfigDetails $OpenIdConnectConfig
 * @property string $Name
 * @property AwsAppSyncGraphQlApiLambdaAuthorizerConfigDetails $LambdaAuthorizerConfig
 * @property bool $XrayEnabled
 * @property string $Arn
 * @property AwsAppSyncGraphQlApiUserPoolConfigDetails $UserPoolConfig
 * @property string $AuthenticationType
 * @property AwsAppSyncGraphQlApiLogConfigDetails $LogConfig
 * @property list<AwsAppSyncGraphQlApiAdditionalAuthenticationProvidersDetails> $AdditionalAuthenticationProviders
 * @property string $WafWebAclArn
 */
class AwsAppSyncGraphQlApiDetails extends Shape
{
    /**
     * @param array{
     *     ApiId?: string,
     *     Id?: string,
     *     OpenIdConnectConfig?: AwsAppSyncGraphQlApiOpenIdConnectConfigDetails,
     *     Name?: string,
     *     LambdaAuthorizerConfig?: AwsAppSyncGraphQlApiLambdaAuthorizerConfigDetails,
     *     XrayEnabled?: bool,
     *     Arn?: string,
     *     UserPoolConfig?: AwsAppSyncGraphQlApiUserPoolConfigDetails,
     *     AuthenticationType?: string,
     *     LogConfig?: AwsAppSyncGraphQlApiLogConfigDetails,
     *     AdditionalAuthenticationProviders?: list<AwsAppSyncGraphQlApiAdditionalAuthenticationProvidersDetails>,
     *     WafWebAclArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
