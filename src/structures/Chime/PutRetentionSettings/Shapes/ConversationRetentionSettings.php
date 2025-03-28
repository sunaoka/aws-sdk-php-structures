<?php

namespace Sunaoka\Aws\Structures\Chime\PutRetentionSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 5475>|null $RetentionDays
 */
class ConversationRetentionSettings extends Shape
{
    /**
     * @param array{RetentionDays?: int<1, 5475>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
