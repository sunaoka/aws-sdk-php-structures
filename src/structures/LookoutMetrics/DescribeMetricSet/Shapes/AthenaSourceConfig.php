<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DescribeMetricSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RoleArn
 * @property string $DatabaseName
 * @property string $DataCatalog
 * @property string $TableName
 * @property string $WorkGroupName
 * @property string $S3ResultsPath
 * @property BackTestConfiguration $BackTestConfiguration
 */
class AthenaSourceConfig extends Shape
{
    /**
     * @param array{
     *     RoleArn?: string,
     *     DatabaseName?: string,
     *     DataCatalog?: string,
     *     TableName?: string,
     *     WorkGroupName?: string,
     *     S3ResultsPath?: string,
     *     BackTestConfiguration?: BackTestConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
