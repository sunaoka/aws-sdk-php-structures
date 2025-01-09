<?php

namespace Sunaoka\Aws\Structures\Iot\TestAuthorization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $principal
 * @property string $cognitoIdentityPoolId
 * @property list<Shapes\AuthInfo> $authInfos
 * @property string $clientId
 * @property list<string> $policyNamesToAdd
 * @property list<string> $policyNamesToSkip
 */
class TestAuthorizationRequest extends Request
{
    /**
     * @param array{
     *     principal?: string,
     *     cognitoIdentityPoolId?: string,
     *     authInfos: list<Shapes\AuthInfo>,
     *     clientId?: string,
     *     policyNamesToAdd?: list<string>,
     *     policyNamesToSkip?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
