<?php

namespace Sunaoka\Aws\Structures\Sfn\GetExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resourceType
 * @property string $resource
 * @property string $output
 * @property HistoryEventExecutionDataDetails $outputDetails
 */
class TaskSucceededEventDetails extends Shape
{
    /**
     * @param array{
     *     resourceType: string,
     *     resource: string,
     *     output?: string,
     *     outputDetails?: HistoryEventExecutionDataDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
