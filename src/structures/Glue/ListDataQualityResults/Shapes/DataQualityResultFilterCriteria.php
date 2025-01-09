<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataSource $DataSource
 * @property string $JobName
 * @property string $JobRunId
 * @property \Aws\Api\DateTimeResult $StartedAfter
 * @property \Aws\Api\DateTimeResult $StartedBefore
 */
class DataQualityResultFilterCriteria extends Shape
{
    /**
     * @param array{
     *     DataSource?: DataSource,
     *     JobName?: string,
     *     JobRunId?: string,
     *     StartedAfter?: \Aws\Api\DateTimeResult,
     *     StartedBefore?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
