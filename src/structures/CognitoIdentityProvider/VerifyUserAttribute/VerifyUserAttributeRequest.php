<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\VerifyUserAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccessToken
 * @property string $AttributeName
 * @property string $Code
 */
class VerifyUserAttributeRequest extends Request
{
    /**
     * @param array{
     *     AccessToken: string,
     *     AttributeName: string,
     *     Code: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
