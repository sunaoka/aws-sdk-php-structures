<?php

namespace Sunaoka\Aws\Structures\AppSync\UpdateGraphqlApi\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'API_KEY'|'AWS_IAM'|'AMAZON_COGNITO_USER_POOLS'|'OPENID_CONNECT'|'AWS_LAMBDA' $authenticationType
 * @property OpenIDConnectConfig $openIDConnectConfig
 * @property CognitoUserPoolConfig $userPoolConfig
 * @property LambdaAuthorizerConfig $lambdaAuthorizerConfig
 */
class AdditionalAuthenticationProvider extends Shape
{
    /**
     * @param array{
     *     authenticationType?: 'API_KEY'|'AWS_IAM'|'AMAZON_COGNITO_USER_POOLS'|'OPENID_CONNECT'|'AWS_LAMBDA',
     *     openIDConnectConfig?: OpenIDConnectConfig,
     *     userPoolConfig?: CognitoUserPoolConfig,
     *     lambdaAuthorizerConfig?: LambdaAuthorizerConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
