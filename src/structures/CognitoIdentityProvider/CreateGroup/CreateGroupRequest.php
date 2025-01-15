<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupName
 * @property string $UserPoolId
 * @property string|null $Description
 * @property string|null $RoleArn
 * @property int<0, max>|null $Precedence
 */
class CreateGroupRequest extends Request
{
    /**
     * @param array{
     *     GroupName: string,
     *     UserPoolId: string,
     *     Description?: string|null,
     *     RoleArn?: string|null,
     *     Precedence?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
