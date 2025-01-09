<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateBot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botName
 * @property string $description
 * @property string $roleArn
 * @property Shapes\DataPrivacy $dataPrivacy
 * @property int<60, 86400> $idleSessionTTLInSeconds
 * @property array<string, string> $botTags
 * @property array<string, string> $testBotAliasTags
 * @property 'Bot'|'BotNetwork' $botType
 * @property list<Shapes\BotMember> $botMembers
 */
class CreateBotRequest extends Request
{
    /**
     * @param array{
     *     botName: string,
     *     description?: string,
     *     roleArn: string,
     *     dataPrivacy: Shapes\DataPrivacy,
     *     idleSessionTTLInSeconds: int<60, 86400>,
     *     botTags?: array<string, string>,
     *     testBotAliasTags?: array<string, string>,
     *     botType?: 'Bot'|'BotNetwork',
     *     botMembers?: list<Shapes\BotMember>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
