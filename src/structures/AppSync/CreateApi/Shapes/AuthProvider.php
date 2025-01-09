<?php

namespace Sunaoka\Aws\Structures\AppSync\CreateApi\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'API_KEY'|'AWS_IAM'|'AMAZON_COGNITO_USER_POOLS'|'OPENID_CONNECT'|'AWS_LAMBDA' $authType
 * @property CognitoConfig $cognitoConfig
 * @property OpenIDConnectConfig $openIDConnectConfig
 * @property LambdaAuthorizerConfig $lambdaAuthorizerConfig
 */
class AuthProvider extends Shape
{
    /**
     * @param array{
     *     authType: 'API_KEY'|'AWS_IAM'|'AMAZON_COGNITO_USER_POOLS'|'OPENID_CONNECT'|'AWS_LAMBDA',
     *     cognitoConfig?: CognitoConfig,
     *     openIDConnectConfig?: OpenIDConnectConfig,
     *     lambdaAuthorizerConfig?: LambdaAuthorizerConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
