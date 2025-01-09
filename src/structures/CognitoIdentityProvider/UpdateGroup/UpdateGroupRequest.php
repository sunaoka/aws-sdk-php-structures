<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\UpdateGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupName
 * @property string $UserPoolId
 * @property string $Description
 * @property string $RoleArn
 * @property int<0, max> $Precedence
 */
class UpdateGroupRequest extends Request
{
    /**
     * @param array{
     *     GroupName: string,
     *     UserPoolId: string,
     *     Description?: string,
     *     RoleArn?: string,
     *     Precedence?: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
