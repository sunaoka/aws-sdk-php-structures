<?php

namespace Sunaoka\Aws\Structures\AppSync\CreateGraphqlApi\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'API_KEY'|'AWS_IAM'|'AMAZON_COGNITO_USER_POOLS'|'OPENID_CONNECT'|'AWS_LAMBDA'|null $authenticationType
 * @property OpenIDConnectConfig|null $openIDConnectConfig
 * @property CognitoUserPoolConfig|null $userPoolConfig
 * @property LambdaAuthorizerConfig|null $lambdaAuthorizerConfig
 */
class AdditionalAuthenticationProvider extends Shape
{
    /**
     * @param array{
     *     authenticationType?: 'API_KEY'|'AWS_IAM'|'AMAZON_COGNITO_USER_POOLS'|'OPENID_CONNECT'|'AWS_LAMBDA'|null,
     *     openIDConnectConfig?: OpenIDConnectConfig|null,
     *     userPoolConfig?: CognitoUserPoolConfig|null,
     *     lambdaAuthorizerConfig?: LambdaAuthorizerConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
