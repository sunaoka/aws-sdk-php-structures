<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListAnomalousLogGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LogStreamName
 * @property 'KEYWORD'|'KEYWORD_TOKEN'|'FORMAT'|'HTTP_CODE'|'BLOCK_FORMAT'|'NUMERICAL_POINT'|'NUMERICAL_NAN'|'NEW_FIELD_NAME'|null $LogAnomalyType
 * @property string|null $LogAnomalyToken
 * @property string|null $LogEventId
 * @property string|null $Explanation
 * @property int|null $NumberOfLogLinesOccurrences
 * @property \Aws\Api\DateTimeResult|null $LogEventTimestamp
 */
class LogAnomalyClass extends Shape
{
    /**
     * @param array{
     *     LogStreamName?: string|null,
     *     LogAnomalyType?: 'KEYWORD'|'KEYWORD_TOKEN'|'FORMAT'|'HTTP_CODE'|'BLOCK_FORMAT'|'NUMERICAL_POINT'|'NUMERICAL_NAN'|'NEW_FIELD_NAME'|null,
     *     LogAnomalyToken?: string|null,
     *     LogEventId?: string|null,
     *     Explanation?: string|null,
     *     NumberOfLogLinesOccurrences?: int|null,
     *     LogEventTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
