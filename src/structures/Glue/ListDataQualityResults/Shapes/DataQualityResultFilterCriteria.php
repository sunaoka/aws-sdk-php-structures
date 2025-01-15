<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataSource|null $DataSource
 * @property string|null $JobName
 * @property string|null $JobRunId
 * @property \Aws\Api\DateTimeResult|null $StartedAfter
 * @property \Aws\Api\DateTimeResult|null $StartedBefore
 */
class DataQualityResultFilterCriteria extends Shape
{
    /**
     * @param array{
     *     DataSource?: DataSource|null,
     *     JobName?: string|null,
     *     JobRunId?: string|null,
     *     StartedAfter?: \Aws\Api\DateTimeResult|null,
     *     StartedBefore?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
