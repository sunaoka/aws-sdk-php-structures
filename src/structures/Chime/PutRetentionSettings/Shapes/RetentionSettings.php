<?php

namespace Sunaoka\Aws\Structures\Chime\PutRetentionSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RoomRetentionSettings|null $RoomRetentionSettings
 * @property ConversationRetentionSettings|null $ConversationRetentionSettings
 */
class RetentionSettings extends Shape
{
    /**
     * @param array{
     *     RoomRetentionSettings?: RoomRetentionSettings|null,
     *     ConversationRetentionSettings?: ConversationRetentionSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
