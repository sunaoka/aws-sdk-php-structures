<?php

namespace Sunaoka\Aws\Structures\CodeStar\UpdateUserProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $userArn
 * @property string|null $displayName
 * @property string|null $emailAddress
 * @property string|null $sshPublicKey
 */
class UpdateUserProfileRequest extends Request
{
    /**
     * @param array{
     *     userArn: string,
     *     displayName?: string|null,
     *     emailAddress?: string|null,
     *     sshPublicKey?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
