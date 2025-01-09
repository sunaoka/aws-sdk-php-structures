<?php

namespace Sunaoka\Aws\Structures\AppSync\CreateGraphqlApi\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $apiId
 * @property 'API_KEY'|'AWS_IAM'|'AMAZON_COGNITO_USER_POOLS'|'OPENID_CONNECT'|'AWS_LAMBDA' $authenticationType
 * @property LogConfig $logConfig
 * @property UserPoolConfig $userPoolConfig
 * @property OpenIDConnectConfig $openIDConnectConfig
 * @property string $arn
 * @property array<string, string> $uris
 * @property array<string, string> $tags
 * @property list<AdditionalAuthenticationProvider> $additionalAuthenticationProviders
 * @property bool $xrayEnabled
 * @property string $wafWebAclArn
 * @property LambdaAuthorizerConfig $lambdaAuthorizerConfig
 * @property array<string, string> $dns
 * @property 'GLOBAL'|'PRIVATE' $visibility
 * @property 'GRAPHQL'|'MERGED' $apiType
 * @property string $mergedApiExecutionRoleArn
 * @property string $owner
 * @property string $ownerContact
 * @property 'ENABLED'|'DISABLED' $introspectionConfig
 * @property int<0, 75> $queryDepthLimit
 * @property int<0, 10000> $resolverCountLimit
 * @property EnhancedMetricsConfig $enhancedMetricsConfig
 */
class GraphqlApi extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     apiId?: string,
     *     authenticationType?: 'API_KEY'|'AWS_IAM'|'AMAZON_COGNITO_USER_POOLS'|'OPENID_CONNECT'|'AWS_LAMBDA',
     *     logConfig?: LogConfig,
     *     userPoolConfig?: UserPoolConfig,
     *     openIDConnectConfig?: OpenIDConnectConfig,
     *     arn?: string,
     *     uris?: array<string, string>,
     *     tags?: array<string, string>,
     *     additionalAuthenticationProviders?: list<AdditionalAuthenticationProvider>,
     *     xrayEnabled?: bool,
     *     wafWebAclArn?: string,
     *     lambdaAuthorizerConfig?: LambdaAuthorizerConfig,
     *     dns?: array<string, string>,
     *     visibility?: 'GLOBAL'|'PRIVATE',
     *     apiType?: 'GRAPHQL'|'MERGED',
     *     mergedApiExecutionRoleArn?: string,
     *     owner?: string,
     *     ownerContact?: string,
     *     introspectionConfig?: 'ENABLED'|'DISABLED',
     *     queryDepthLimit?: int<0, 75>,
     *     resolverCountLimit?: int<0, 10000>,
     *     enhancedMetricsConfig?: EnhancedMetricsConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
