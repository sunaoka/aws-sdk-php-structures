<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\BatchUpdateMemoryRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<31, max>|null $recordExpiryDurationDays
 * @property 'REMOVE'|null $action
 */
class RecordExpirySpecification extends Shape
{
    /**
     * @param array{
     *     recordExpiryDurationDays?: int<31, max>|null,
     *     action?: 'REMOVE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
