<?php

namespace Sunaoka\Aws\Structures\AppSync\GetApi\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'API_KEY'|'AWS_IAM'|'AMAZON_COGNITO_USER_POOLS'|'OPENID_CONNECT'|'AWS_LAMBDA' $authType
 * @property CognitoConfig|null $cognitoConfig
 * @property OpenIDConnectConfig|null $openIDConnectConfig
 * @property LambdaAuthorizerConfig|null $lambdaAuthorizerConfig
 */
class AuthProvider extends Shape
{
    /**
     * @param array{
     *     authType: 'API_KEY'|'AWS_IAM'|'AMAZON_COGNITO_USER_POOLS'|'OPENID_CONNECT'|'AWS_LAMBDA',
     *     cognitoConfig?: CognitoConfig|null,
     *     openIDConnectConfig?: OpenIDConnectConfig|null,
     *     lambdaAuthorizerConfig?: LambdaAuthorizerConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
