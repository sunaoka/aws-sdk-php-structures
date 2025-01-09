<?php

namespace Sunaoka\Aws\Structures\Sfn\GetExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $input
 * @property HistoryEventExecutionDataDetails $inputDetails
 */
class StateEnteredEventDetails extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     input?: string,
     *     inputDetails?: HistoryEventExecutionDataDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
