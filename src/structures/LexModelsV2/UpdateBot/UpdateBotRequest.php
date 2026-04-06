<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateBot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property string $botName
 * @property string|null $description
 * @property string $roleArn
 * @property Shapes\DataPrivacy $dataPrivacy
 * @property int<60, 86400> $idleSessionTTLInSeconds
 * @property 'Bot'|'BotNetwork'|null $botType
 * @property list<Shapes\BotMember>|null $botMembers
 * @property Shapes\ErrorLogSettings|null $errorLogSettings
 */
class UpdateBotRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     botName: string,
     *     description?: string|null,
     *     roleArn: string,
     *     dataPrivacy: Shapes\DataPrivacy,
     *     idleSessionTTLInSeconds: int<60, 86400>,
     *     botType?: 'Bot'|'BotNetwork'|null,
     *     botMembers?: list<Shapes\BotMember>|null,
     *     errorLogSettings?: Shapes\ErrorLogSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
