<?php

namespace Sunaoka\Aws\Structures\Wickr\CreateBot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkId
 * @property string $username
 * @property string|null $displayName
 * @property string $groupId
 * @property string $challenge
 */
class CreateBotRequest extends Request
{
    /**
     * @param array{
     *     networkId: string,
     *     username: string,
     *     displayName?: string|null,
     *     groupId: string,
     *     challenge: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
