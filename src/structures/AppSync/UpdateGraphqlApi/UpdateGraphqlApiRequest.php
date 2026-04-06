<?php

namespace Sunaoka\Aws\Structures\AppSync\UpdateGraphqlApi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $apiId
 * @property string $name
 * @property Shapes\LogConfig|null $logConfig
 * @property 'API_KEY'|'AWS_IAM'|'AMAZON_COGNITO_USER_POOLS'|'OPENID_CONNECT'|'AWS_LAMBDA'|null $authenticationType
 * @property Shapes\UserPoolConfig|null $userPoolConfig
 * @property Shapes\OpenIDConnectConfig|null $openIDConnectConfig
 * @property list<Shapes\AdditionalAuthenticationProvider>|null $additionalAuthenticationProviders
 * @property bool|null $xrayEnabled
 * @property Shapes\LambdaAuthorizerConfig|null $lambdaAuthorizerConfig
 * @property string|null $mergedApiExecutionRoleArn
 * @property string|null $ownerContact
 */
class UpdateGraphqlApiRequest extends Request
{
    /**
     * @param array{
     *     apiId: string,
     *     name: string,
     *     logConfig?: Shapes\LogConfig|null,
     *     authenticationType?: 'API_KEY'|'AWS_IAM'|'AMAZON_COGNITO_USER_POOLS'|'OPENID_CONNECT'|'AWS_LAMBDA'|null,
     *     userPoolConfig?: Shapes\UserPoolConfig|null,
     *     openIDConnectConfig?: Shapes\OpenIDConnectConfig|null,
     *     additionalAuthenticationProviders?: list<Shapes\AdditionalAuthenticationProvider>|null,
     *     xrayEnabled?: bool|null,
     *     lambdaAuthorizerConfig?: Shapes\LambdaAuthorizerConfig|null,
     *     mergedApiExecutionRoleArn?: string|null,
     *     ownerContact?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
