<?php

namespace Sunaoka\Aws\Structures\AppSync\UpdateGraphqlApi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $apiId
 * @property string $name
 * @property Shapes\LogConfig $logConfig
 * @property 'API_KEY'|'AWS_IAM'|'AMAZON_COGNITO_USER_POOLS'|'OPENID_CONNECT'|'AWS_LAMBDA' $authenticationType
 * @property Shapes\UserPoolConfig $userPoolConfig
 * @property Shapes\OpenIDConnectConfig $openIDConnectConfig
 * @property list<Shapes\AdditionalAuthenticationProvider> $additionalAuthenticationProviders
 * @property bool $xrayEnabled
 * @property Shapes\LambdaAuthorizerConfig $lambdaAuthorizerConfig
 * @property string $mergedApiExecutionRoleArn
 * @property string $ownerContact
 * @property 'ENABLED'|'DISABLED' $introspectionConfig
 * @property int<0, 75> $queryDepthLimit
 * @property int<0, 10000> $resolverCountLimit
 * @property Shapes\EnhancedMetricsConfig $enhancedMetricsConfig
 */
class UpdateGraphqlApiRequest extends Request
{
    /**
     * @param array{
     *     apiId: string,
     *     name: string,
     *     logConfig?: Shapes\LogConfig,
     *     authenticationType: 'API_KEY'|'AWS_IAM'|'AMAZON_COGNITO_USER_POOLS'|'OPENID_CONNECT'|'AWS_LAMBDA',
     *     userPoolConfig?: Shapes\UserPoolConfig,
     *     openIDConnectConfig?: Shapes\OpenIDConnectConfig,
     *     additionalAuthenticationProviders?: list<Shapes\AdditionalAuthenticationProvider>,
     *     xrayEnabled?: bool,
     *     lambdaAuthorizerConfig?: Shapes\LambdaAuthorizerConfig,
     *     mergedApiExecutionRoleArn?: string,
     *     ownerContact?: string,
     *     introspectionConfig?: 'ENABLED'|'DISABLED',
     *     queryDepthLimit?: int<0, 75>,
     *     resolverCountLimit?: int<0, 10000>,
     *     enhancedMetricsConfig?: Shapes\EnhancedMetricsConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
