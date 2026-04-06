<?php

namespace Sunaoka\Aws\Structures\CodeStar\DeleteUserProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $userArn
 */
class DeleteUserProfileRequest extends Request
{
    /**
     * @param array{userArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
