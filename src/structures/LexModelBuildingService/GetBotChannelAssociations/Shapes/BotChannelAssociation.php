<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetBotChannelAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $description
 * @property string|null $botAlias
 * @property string|null $botName
 * @property \Aws\Api\DateTimeResult|null $createdDate
 * @property 'Facebook'|'Slack'|'Twilio-Sms'|'Kik'|null $type
 * @property array<string, string>|null $botConfiguration
 * @property 'IN_PROGRESS'|'CREATED'|'FAILED'|null $status
 * @property string|null $failureReason
 */
class BotChannelAssociation extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     description?: string|null,
     *     botAlias?: string|null,
     *     botName?: string|null,
     *     createdDate?: \Aws\Api\DateTimeResult|null,
     *     type?: 'Facebook'|'Slack'|'Twilio-Sms'|'Kik'|null,
     *     botConfiguration?: array<string, string>|null,
     *     status?: 'IN_PROGRESS'|'CREATED'|'FAILED'|null,
     *     failureReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
