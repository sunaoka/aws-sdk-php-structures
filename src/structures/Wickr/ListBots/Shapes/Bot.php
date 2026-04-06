<?php

namespace Sunaoka\Aws\Structures\Wickr\ListBots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $botId
 * @property string|null $displayName
 * @property string|null $username
 * @property string|null $uname
 * @property string|null $pubkey
 * @property int|null $status
 * @property string|null $groupId
 * @property bool|null $hasChallenge
 * @property bool|null $suspended
 * @property string|null $lastLogin
 */
class Bot extends Shape
{
    /**
     * @param array{
     *     botId?: string|null,
     *     displayName?: string|null,
     *     username?: string|null,
     *     uname?: string|null,
     *     pubkey?: string|null,
     *     status?: int|null,
     *     groupId?: string|null,
     *     hasChallenge?: bool|null,
     *     suspended?: bool|null,
     *     lastLogin?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
