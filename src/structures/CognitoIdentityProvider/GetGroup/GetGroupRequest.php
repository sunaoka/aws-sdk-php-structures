<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupName
 * @property string $UserPoolId
 */
class GetGroupRequest extends Request
{
    /**
     * @param array{
     *     GroupName: string,
     *     UserPoolId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
