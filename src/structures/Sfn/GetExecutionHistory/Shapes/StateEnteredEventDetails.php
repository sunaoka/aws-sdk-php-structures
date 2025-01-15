<?php

namespace Sunaoka\Aws\Structures\Sfn\GetExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $input
 * @property HistoryEventExecutionDataDetails|null $inputDetails
 */
class StateEnteredEventDetails extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     input?: string|null,
     *     inputDetails?: HistoryEventExecutionDataDetails|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
