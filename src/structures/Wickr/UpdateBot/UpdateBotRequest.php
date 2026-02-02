<?php

namespace Sunaoka\Aws\Structures\Wickr\UpdateBot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkId
 * @property string $botId
 * @property string|null $displayName
 * @property string|null $groupId
 * @property string|null $challenge
 * @property bool|null $suspend
 */
class UpdateBotRequest extends Request
{
    /**
     * @param array{
     *     networkId: string,
     *     botId: string,
     *     displayName?: string|null,
     *     groupId?: string|null,
     *     challenge?: string|null,
     *     suspend?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
