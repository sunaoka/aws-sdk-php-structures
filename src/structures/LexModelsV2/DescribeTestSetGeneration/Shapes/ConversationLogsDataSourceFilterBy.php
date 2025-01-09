<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeTestSetGeneration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property 'Speech'|'Text' $inputMode
 */
class ConversationLogsDataSourceFilterBy extends Shape
{
    /**
     * @param array{
     *     startTime: \Aws\Api\DateTimeResult,
     *     endTime: \Aws\Api\DateTimeResult,
     *     inputMode: 'Speech'|'Text'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
