<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\PutBotAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $description
 * @property string $botVersion
 * @property string $botName
 * @property string $checksum
 * @property Shapes\ConversationLogsRequest $conversationLogs
 * @property list<Shapes\Tag> $tags
 */
class PutBotAliasRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     botVersion: string,
     *     botName: string,
     *     checksum?: string,
     *     conversationLogs?: Shapes\ConversationLogsRequest,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
