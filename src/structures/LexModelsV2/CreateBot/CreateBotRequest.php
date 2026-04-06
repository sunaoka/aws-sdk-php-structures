<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateBot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botName
 * @property string|null $description
 * @property string $roleArn
 * @property Shapes\DataPrivacy $dataPrivacy
 * @property int<60, 86400> $idleSessionTTLInSeconds
 * @property array<string, string>|null $botTags
 * @property array<string, string>|null $testBotAliasTags
 * @property 'Bot'|'BotNetwork'|null $botType
 * @property list<Shapes\BotMember>|null $botMembers
 */
class CreateBotRequest extends Request
{
    /**
     * @param array{
     *     botName: string,
     *     description?: string|null,
     *     roleArn: string,
     *     dataPrivacy: Shapes\DataPrivacy,
     *     idleSessionTTLInSeconds: int<60, 86400>,
     *     botTags?: array<string, string>|null,
     *     testBotAliasTags?: array<string, string>|null,
     *     botType?: 'Bot'|'BotNetwork'|null,
     *     botMembers?: list<Shapes\BotMember>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
