<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApiId
 * @property string|null $Id
 * @property AwsAppSyncGraphQlApiOpenIdConnectConfigDetails|null $OpenIdConnectConfig
 * @property string|null $Name
 * @property AwsAppSyncGraphQlApiLambdaAuthorizerConfigDetails|null $LambdaAuthorizerConfig
 * @property bool|null $XrayEnabled
 * @property string|null $Arn
 * @property AwsAppSyncGraphQlApiUserPoolConfigDetails|null $UserPoolConfig
 * @property string|null $AuthenticationType
 * @property AwsAppSyncGraphQlApiLogConfigDetails|null $LogConfig
 * @property list<AwsAppSyncGraphQlApiAdditionalAuthenticationProvidersDetails>|null $AdditionalAuthenticationProviders
 * @property string|null $WafWebAclArn
 */
class AwsAppSyncGraphQlApiDetails extends Shape
{
    /**
     * @param array{
     *     ApiId?: string|null,
     *     Id?: string|null,
     *     OpenIdConnectConfig?: AwsAppSyncGraphQlApiOpenIdConnectConfigDetails|null,
     *     Name?: string|null,
     *     LambdaAuthorizerConfig?: AwsAppSyncGraphQlApiLambdaAuthorizerConfigDetails|null,
     *     XrayEnabled?: bool|null,
     *     Arn?: string|null,
     *     UserPoolConfig?: AwsAppSyncGraphQlApiUserPoolConfigDetails|null,
     *     AuthenticationType?: string|null,
     *     LogConfig?: AwsAppSyncGraphQlApiLogConfigDetails|null,
     *     AdditionalAuthenticationProviders?: list<AwsAppSyncGraphQlApiAdditionalAuthenticationProvidersDetails>|null,
     *     WafWebAclArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
