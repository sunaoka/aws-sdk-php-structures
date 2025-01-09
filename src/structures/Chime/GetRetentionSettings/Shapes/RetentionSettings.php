<?php

namespace Sunaoka\Aws\Structures\Chime\GetRetentionSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RoomRetentionSettings $RoomRetentionSettings
 * @property ConversationRetentionSettings $ConversationRetentionSettings
 */
class RetentionSettings extends Shape
{
    /**
     * @param array{
     *     RoomRetentionSettings?: RoomRetentionSettings,
     *     ConversationRetentionSettings?: ConversationRetentionSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
