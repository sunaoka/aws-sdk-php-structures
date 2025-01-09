<?php

namespace Sunaoka\Aws\Structures\AppSync\CreateGraphqlApi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property Shapes\LogConfig $logConfig
 * @property 'API_KEY'|'AWS_IAM'|'AMAZON_COGNITO_USER_POOLS'|'OPENID_CONNECT'|'AWS_LAMBDA' $authenticationType
 * @property Shapes\UserPoolConfig $userPoolConfig
 * @property Shapes\OpenIDConnectConfig $openIDConnectConfig
 * @property array<string, string> $tags
 * @property list<Shapes\AdditionalAuthenticationProvider> $additionalAuthenticationProviders
 * @property bool $xrayEnabled
 * @property Shapes\LambdaAuthorizerConfig $lambdaAuthorizerConfig
 * @property 'GRAPHQL'|'MERGED' $apiType
 * @property string $mergedApiExecutionRoleArn
 * @property 'GLOBAL'|'PRIVATE' $visibility
 * @property string $ownerContact
 * @property 'ENABLED'|'DISABLED' $introspectionConfig
 * @property int $queryDepthLimit
 * @property int $resolverCountLimit
 * @property Shapes\EnhancedMetricsConfig $enhancedMetricsConfig
 */
class CreateGraphqlApiRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     logConfig?: Shapes\LogConfig,
     *     authenticationType: 'API_KEY'|'AWS_IAM'|'AMAZON_COGNITO_USER_POOLS'|'OPENID_CONNECT'|'AWS_LAMBDA',
     *     userPoolConfig?: Shapes\UserPoolConfig,
     *     openIDConnectConfig?: Shapes\OpenIDConnectConfig,
     *     tags?: array<string, string>,
     *     additionalAuthenticationProviders?: list<Shapes\AdditionalAuthenticationProvider>,
     *     xrayEnabled?: bool,
     *     lambdaAuthorizerConfig?: Shapes\LambdaAuthorizerConfig,
     *     apiType?: 'GRAPHQL'|'MERGED',
     *     mergedApiExecutionRoleArn?: string,
     *     visibility?: 'GLOBAL'|'PRIVATE',
     *     ownerContact?: string,
     *     introspectionConfig?: 'ENABLED'|'DISABLED',
     *     queryDepthLimit?: int,
     *     resolverCountLimit?: int,
     *     enhancedMetricsConfig?: Shapes\EnhancedMetricsConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
