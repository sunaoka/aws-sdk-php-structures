<?php

namespace Sunaoka\Aws\Structures\Chime\GetBot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BotId
 * @property string $UserId
 * @property string $DisplayName
 * @property 'ChatBot' $BotType
 * @property bool $Disabled
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $UpdatedTimestamp
 * @property string $BotEmail
 * @property string $SecurityToken
 */
class Bot extends Shape
{
    /**
     * @param array{
     *     BotId?: string,
     *     UserId?: string,
     *     DisplayName?: string,
     *     BotType?: 'ChatBot',
     *     Disabled?: bool,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult,
     *     UpdatedTimestamp?: \Aws\Api\DateTimeResult,
     *     BotEmail?: string,
     *     SecurityToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
