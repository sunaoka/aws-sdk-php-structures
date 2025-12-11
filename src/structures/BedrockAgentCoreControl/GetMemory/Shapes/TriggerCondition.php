<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MessageBasedTrigger|null $messageBasedTrigger
 * @property TokenBasedTrigger|null $tokenBasedTrigger
 * @property TimeBasedTrigger|null $timeBasedTrigger
 */
class TriggerCondition extends Shape
{
    /**
     * @param array{
     *     messageBasedTrigger?: MessageBasedTrigger|null,
     *     tokenBasedTrigger?: TokenBasedTrigger|null,
     *     timeBasedTrigger?: TimeBasedTrigger|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
