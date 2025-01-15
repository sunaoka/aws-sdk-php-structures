<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\PutBotAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property string $botVersion
 * @property string $botName
 * @property string|null $checksum
 * @property Shapes\ConversationLogsRequest|null $conversationLogs
 * @property list<Shapes\Tag>|null $tags
 */
class PutBotAliasRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     botVersion: string,
     *     botName: string,
     *     checksum?: string|null,
     *     conversationLogs?: Shapes\ConversationLogsRequest|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
