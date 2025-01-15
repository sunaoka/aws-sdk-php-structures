<?php

namespace Sunaoka\Aws\Structures\Chime\CreateBot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BotId
 * @property string|null $UserId
 * @property string|null $DisplayName
 * @property 'ChatBot'|null $BotType
 * @property bool|null $Disabled
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $UpdatedTimestamp
 * @property string|null $BotEmail
 * @property string|null $SecurityToken
 */
class Bot extends Shape
{
    /**
     * @param array{
     *     BotId?: string|null,
     *     UserId?: string|null,
     *     DisplayName?: string|null,
     *     BotType?: 'ChatBot'|null,
     *     Disabled?: bool|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     UpdatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     BotEmail?: string|null,
     *     SecurityToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
