<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\UpdateMetricSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RoleArn
 * @property string|null $DatabaseName
 * @property string|null $DataCatalog
 * @property string|null $TableName
 * @property string|null $WorkGroupName
 * @property string|null $S3ResultsPath
 * @property BackTestConfiguration|null $BackTestConfiguration
 */
class AthenaSourceConfig extends Shape
{
    /**
     * @param array{
     *     RoleArn?: string|null,
     *     DatabaseName?: string|null,
     *     DataCatalog?: string|null,
     *     TableName?: string|null,
     *     WorkGroupName?: string|null,
     *     S3ResultsPath?: string|null,
     *     BackTestConfiguration?: BackTestConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
