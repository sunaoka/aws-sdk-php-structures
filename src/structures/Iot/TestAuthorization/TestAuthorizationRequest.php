<?php

namespace Sunaoka\Aws\Structures\Iot\TestAuthorization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $principal
 * @property string|null $cognitoIdentityPoolId
 * @property list<Shapes\AuthInfo> $authInfos
 * @property string|null $clientId
 * @property list<string>|null $policyNamesToAdd
 * @property list<string>|null $policyNamesToSkip
 */
class TestAuthorizationRequest extends Request
{
    /**
     * @param array{
     *     principal?: string|null,
     *     cognitoIdentityPoolId?: string|null,
     *     authInfos: list<Shapes\AuthInfo>,
     *     clientId?: string|null,
     *     policyNamesToAdd?: list<string>|null,
     *     policyNamesToSkip?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
