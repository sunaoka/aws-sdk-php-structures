<?php

namespace Sunaoka\Aws\Structures\Wickr\UpdateGuestUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkId
 * @property string $usernameHash
 * @property bool $block
 */
class UpdateGuestUserRequest extends Request
{
    /**
     * @param array{
     *     networkId: string,
     *     usernameHash: string,
     *     block: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
