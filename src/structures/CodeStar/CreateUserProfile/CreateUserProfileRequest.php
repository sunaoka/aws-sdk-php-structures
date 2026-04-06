<?php

namespace Sunaoka\Aws\Structures\CodeStar\CreateUserProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $userArn
 * @property string $displayName
 * @property string $emailAddress
 * @property string|null $sshPublicKey
 */
class CreateUserProfileRequest extends Request
{
    /**
     * @param array{
     *     userArn: string,
     *     displayName: string,
     *     emailAddress: string,
     *     sshPublicKey?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
