<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetBotChannelAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $description
 * @property string $botAlias
 * @property string $botName
 * @property \Aws\Api\DateTimeResult $createdDate
 * @property 'Facebook'|'Slack'|'Twilio-Sms'|'Kik' $type
 * @property array<string, string> $botConfiguration
 * @property 'IN_PROGRESS'|'CREATED'|'FAILED' $status
 * @property string $failureReason
 */
class BotChannelAssociation extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     description?: string,
     *     botAlias?: string,
     *     botName?: string,
     *     createdDate?: \Aws\Api\DateTimeResult,
     *     type?: 'Facebook'|'Slack'|'Twilio-Sms'|'Kik',
     *     botConfiguration?: array<string, string>,
     *     status?: 'IN_PROGRESS'|'CREATED'|'FAILED',
     *     failureReason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
