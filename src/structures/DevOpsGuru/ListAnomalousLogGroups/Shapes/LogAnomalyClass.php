<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListAnomalousLogGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LogStreamName
 * @property 'KEYWORD'|'KEYWORD_TOKEN'|'FORMAT'|'HTTP_CODE'|'BLOCK_FORMAT'|'NUMERICAL_POINT'|'NUMERICAL_NAN'|'NEW_FIELD_NAME' $LogAnomalyType
 * @property string $LogAnomalyToken
 * @property string $LogEventId
 * @property string $Explanation
 * @property int $NumberOfLogLinesOccurrences
 * @property \Aws\Api\DateTimeResult $LogEventTimestamp
 */
class LogAnomalyClass extends Shape
{
    /**
     * @param array{
     *     LogStreamName?: string,
     *     LogAnomalyType?: 'KEYWORD'|'KEYWORD_TOKEN'|'FORMAT'|'HTTP_CODE'|'BLOCK_FORMAT'|'NUMERICAL_POINT'|'NUMERICAL_NAN'|'NEW_FIELD_NAME',
     *     LogAnomalyToken?: string,
     *     LogEventId?: string,
     *     Explanation?: string,
     *     NumberOfLogLinesOccurrences?: int,
     *     LogEventTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
