<?php

namespace Sunaoka\Aws\Structures\Wickr\UpdateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkId
 * @property string $userId
 * @property Shapes\UpdateUserDetails|null $userDetails
 */
class UpdateUserRequest extends Request
{
    /**
     * @param array{
     *     networkId: string,
     *     userId: string,
     *     userDetails?: Shapes\UpdateUserDetails|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
