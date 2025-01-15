<?php

namespace Sunaoka\Aws\Structures\Sfn\GetExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resource
 * @property string|null $input
 * @property HistoryEventExecutionDataDetails|null $inputDetails
 * @property int|null $timeoutInSeconds
 * @property int|null $heartbeatInSeconds
 */
class ActivityScheduledEventDetails extends Shape
{
    /**
     * @param array{
     *     resource: string,
     *     input?: string|null,
     *     inputDetails?: HistoryEventExecutionDataDetails|null,
     *     timeoutInSeconds?: int|null,
     *     heartbeatInSeconds?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
