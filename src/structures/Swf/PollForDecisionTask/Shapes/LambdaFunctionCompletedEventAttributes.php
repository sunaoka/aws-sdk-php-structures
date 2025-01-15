<?php

namespace Sunaoka\Aws\Structures\Swf\PollForDecisionTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $scheduledEventId
 * @property int $startedEventId
 * @property string|null $result
 */
class LambdaFunctionCompletedEventAttributes extends Shape
{
    /**
     * @param array{
     *     scheduledEventId: int,
     *     startedEventId: int,
     *     result?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
