<?php

namespace Sunaoka\Aws\Structures\Sfn\GetExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resource
 * @property string $input
 * @property HistoryEventExecutionDataDetails $inputDetails
 * @property int $timeoutInSeconds
 * @property int $heartbeatInSeconds
 */
class ActivityScheduledEventDetails extends Shape
{
    /**
     * @param array{
     *     resource: string,
     *     input?: string,
     *     inputDetails?: HistoryEventExecutionDataDetails,
     *     timeoutInSeconds?: int,
     *     heartbeatInSeconds?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
