<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResultId
 * @property DataSource|null $DataSource
 * @property string|null $JobName
 * @property string|null $JobRunId
 * @property \Aws\Api\DateTimeResult|null $StartedOn
 */
class DataQualityResultDescription extends Shape
{
    /**
     * @param array{
     *     ResultId?: string|null,
     *     DataSource?: DataSource|null,
     *     JobName?: string|null,
     *     JobRunId?: string|null,
     *     StartedOn?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
