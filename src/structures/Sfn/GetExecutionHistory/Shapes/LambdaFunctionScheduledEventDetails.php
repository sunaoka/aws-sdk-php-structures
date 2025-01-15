<?php

namespace Sunaoka\Aws\Structures\Sfn\GetExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resource
 * @property string|null $input
 * @property HistoryEventExecutionDataDetails|null $inputDetails
 * @property int|null $timeoutInSeconds
 * @property TaskCredentials|null $taskCredentials
 */
class LambdaFunctionScheduledEventDetails extends Shape
{
    /**
     * @param array{
     *     resource: string,
     *     input?: string|null,
     *     inputDetails?: HistoryEventExecutionDataDetails|null,
     *     timeoutInSeconds?: int|null,
     *     taskCredentials?: TaskCredentials|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
