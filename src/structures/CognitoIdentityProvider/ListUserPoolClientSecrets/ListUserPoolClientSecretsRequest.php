<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListUserPoolClientSecrets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $ClientId
 * @property string|null $NextToken
 */
class ListUserPoolClientSecretsRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     ClientId: string,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
