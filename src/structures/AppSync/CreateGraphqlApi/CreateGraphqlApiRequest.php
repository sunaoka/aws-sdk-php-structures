<?php

namespace Sunaoka\Aws\Structures\AppSync\CreateGraphqlApi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property Shapes\LogConfig|null $logConfig
 * @property 'API_KEY'|'AWS_IAM'|'AMAZON_COGNITO_USER_POOLS'|'OPENID_CONNECT'|'AWS_LAMBDA' $authenticationType
 * @property Shapes\UserPoolConfig|null $userPoolConfig
 * @property Shapes\OpenIDConnectConfig|null $openIDConnectConfig
 * @property array<string, string>|null $tags
 * @property list<Shapes\AdditionalAuthenticationProvider>|null $additionalAuthenticationProviders
 * @property bool|null $xrayEnabled
 * @property Shapes\LambdaAuthorizerConfig|null $lambdaAuthorizerConfig
 * @property 'GRAPHQL'|'MERGED'|null $apiType
 * @property string|null $mergedApiExecutionRoleArn
 * @property 'GLOBAL'|'PRIVATE'|null $visibility
 * @property string|null $ownerContact
 * @property 'ENABLED'|'DISABLED'|null $introspectionConfig
 * @property int<0, 75>|null $queryDepthLimit
 * @property int<0, 10000>|null $resolverCountLimit
 * @property Shapes\EnhancedMetricsConfig|null $enhancedMetricsConfig
 */
class CreateGraphqlApiRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     logConfig?: Shapes\LogConfig|null,
     *     authenticationType: 'API_KEY'|'AWS_IAM'|'AMAZON_COGNITO_USER_POOLS'|'OPENID_CONNECT'|'AWS_LAMBDA',
     *     userPoolConfig?: Shapes\UserPoolConfig|null,
     *     openIDConnectConfig?: Shapes\OpenIDConnectConfig|null,
     *     tags?: array<string, string>|null,
     *     additionalAuthenticationProviders?: list<Shapes\AdditionalAuthenticationProvider>|null,
     *     xrayEnabled?: bool|null,
     *     lambdaAuthorizerConfig?: Shapes\LambdaAuthorizerConfig|null,
     *     apiType?: 'GRAPHQL'|'MERGED'|null,
     *     mergedApiExecutionRoleArn?: string|null,
     *     visibility?: 'GLOBAL'|'PRIVATE'|null,
     *     ownerContact?: string|null,
     *     introspectionConfig?: 'ENABLED'|'DISABLED'|null,
     *     queryDepthLimit?: int<0, 75>|null,
     *     resolverCountLimit?: int<0, 10000>|null,
     *     enhancedMetricsConfig?: Shapes\EnhancedMetricsConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
