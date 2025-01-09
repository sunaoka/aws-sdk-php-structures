<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResultId
 * @property DataSource $DataSource
 * @property string $JobName
 * @property string $JobRunId
 * @property \Aws\Api\DateTimeResult $StartedOn
 */
class DataQualityResultDescription extends Shape
{
    /**
     * @param array{
     *     ResultId?: string,
     *     DataSource?: DataSource,
     *     JobName?: string,
     *     JobRunId?: string,
     *     StartedOn?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
