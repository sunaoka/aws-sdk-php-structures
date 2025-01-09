<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateBot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $botMemberId
 * @property string $botMemberName
 * @property string $botMemberAliasId
 * @property string $botMemberAliasName
 * @property string $botMemberVersion
 */
class BotMember extends Shape
{
    /**
     * @param array{
     *     botMemberId: string,
     *     botMemberName: string,
     *     botMemberAliasId: string,
     *     botMemberAliasName: string,
     *     botMemberVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
