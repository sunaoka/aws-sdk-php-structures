<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FormId
 * @property string|null $EvaluationArn
 * @property 'COMPLETE'|'IN_PROGRESS'|'DELETED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $StartTimestamp
 * @property \Aws\Api\DateTimeResult|null $EndTimestamp
 * @property \Aws\Api\DateTimeResult|null $DeleteTimestamp
 * @property string|null $ExportLocation
 */
class ContactEvaluation extends Shape
{
    /**
     * @param array{
     *     FormId?: string|null,
     *     EvaluationArn?: string|null,
     *     Status?: 'COMPLETE'|'IN_PROGRESS'|'DELETED'|null,
     *     StartTimestamp?: \Aws\Api\DateTimeResult|null,
     *     EndTimestamp?: \Aws\Api\DateTimeResult|null,
     *     DeleteTimestamp?: \Aws\Api\DateTimeResult|null,
     *     ExportLocation?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
