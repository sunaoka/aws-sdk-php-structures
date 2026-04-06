<?php

namespace Sunaoka\Aws\Structures\AppSync\ListGraphqlApis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $apiId
 * @property 'API_KEY'|'AWS_IAM'|'AMAZON_COGNITO_USER_POOLS'|'OPENID_CONNECT'|'AWS_LAMBDA'|null $authenticationType
 * @property LogConfig|null $logConfig
 * @property UserPoolConfig|null $userPoolConfig
 * @property OpenIDConnectConfig|null $openIDConnectConfig
 * @property string|null $arn
 * @property array<string, string>|null $uris
 * @property array<string, string>|null $tags
 * @property list<AdditionalAuthenticationProvider>|null $additionalAuthenticationProviders
 * @property bool|null $xrayEnabled
 * @property string|null $wafWebAclArn
 * @property LambdaAuthorizerConfig|null $lambdaAuthorizerConfig
 * @property array<string, string>|null $dns
 * @property 'GLOBAL'|'PRIVATE'|null $visibility
 * @property 'GRAPHQL'|'MERGED'|null $apiType
 * @property string|null $mergedApiExecutionRoleArn
 * @property string|null $owner
 * @property string|null $ownerContact
 * @property 'ENABLED'|'DISABLED'|null $introspectionConfig
 * @property int<0, 75>|null $queryDepthLimit
 * @property int<0, 10000>|null $resolverCountLimit
 * @property EnhancedMetricsConfig|null $enhancedMetricsConfig
 */
class GraphqlApi extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     apiId?: string|null,
     *     authenticationType?: 'API_KEY'|'AWS_IAM'|'AMAZON_COGNITO_USER_POOLS'|'OPENID_CONNECT'|'AWS_LAMBDA'|null,
     *     logConfig?: LogConfig|null,
     *     userPoolConfig?: UserPoolConfig|null,
     *     openIDConnectConfig?: OpenIDConnectConfig|null,
     *     arn?: string|null,
     *     uris?: array<string, string>|null,
     *     tags?: array<string, string>|null,
     *     additionalAuthenticationProviders?: list<AdditionalAuthenticationProvider>|null,
     *     xrayEnabled?: bool|null,
     *     wafWebAclArn?: string|null,
     *     lambdaAuthorizerConfig?: LambdaAuthorizerConfig|null,
     *     dns?: array<string, string>|null,
     *     visibility?: 'GLOBAL'|'PRIVATE'|null,
     *     apiType?: 'GRAPHQL'|'MERGED'|null,
     *     mergedApiExecutionRoleArn?: string|null,
     *     owner?: string|null,
     *     ownerContact?: string|null,
     *     introspectionConfig?: 'ENABLED'|'DISABLED'|null,
     *     queryDepthLimit?: int<0, 75>|null,
     *     resolverCountLimit?: int<0, 10000>|null,
     *     enhancedMetricsConfig?: EnhancedMetricsConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
