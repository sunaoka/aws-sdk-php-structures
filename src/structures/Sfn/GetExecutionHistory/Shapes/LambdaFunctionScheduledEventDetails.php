<?php

namespace Sunaoka\Aws\Structures\Sfn\GetExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resource
 * @property string $input
 * @property HistoryEventExecutionDataDetails $inputDetails
 * @property int $timeoutInSeconds
 * @property TaskCredentials $taskCredentials
 */
class LambdaFunctionScheduledEventDetails extends Shape
{
    /**
     * @param array{
     *     resource: string,
     *     input?: string,
     *     inputDetails?: HistoryEventExecutionDataDetails,
     *     timeoutInSeconds?: int,
     *     taskCredentials?: TaskCredentials
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
