<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateBot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property string $botName
 * @property string $description
 * @property string $roleArn
 * @property Shapes\DataPrivacy $dataPrivacy
 * @property int $idleSessionTTLInSeconds
 * @property 'Bot'|'BotNetwork' $botType
 * @property list<Shapes\BotMember> $botMembers
 */
class UpdateBotRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     botName: string,
     *     description?: string,
     *     roleArn: string,
     *     dataPrivacy: Shapes\DataPrivacy,
     *     idleSessionTTLInSeconds: int,
     *     botType?: 'Bot'|'BotNetwork',
     *     botMembers?: list<Shapes\BotMember>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
