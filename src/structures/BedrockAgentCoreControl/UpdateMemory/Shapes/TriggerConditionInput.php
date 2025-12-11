<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MessageBasedTriggerInput|null $messageBasedTrigger
 * @property TokenBasedTriggerInput|null $tokenBasedTrigger
 * @property TimeBasedTriggerInput|null $timeBasedTrigger
 */
class TriggerConditionInput extends Shape
{
    /**
     * @param array{
     *     messageBasedTrigger?: MessageBasedTriggerInput|null,
     *     tokenBasedTrigger?: TokenBasedTriggerInput|null,
     *     timeBasedTrigger?: TimeBasedTriggerInput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
