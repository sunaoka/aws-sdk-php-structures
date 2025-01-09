<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DescribeMetricSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClusterIdentifier
 * @property string $DatabaseHost
 * @property int $DatabasePort
 * @property string $SecretManagerArn
 * @property string $DatabaseName
 * @property string $TableName
 * @property string $RoleArn
 * @property VpcConfiguration $VpcConfiguration
 */
class RedshiftSourceConfig extends Shape
{
    /**
     * @param array{
     *     ClusterIdentifier?: string,
     *     DatabaseHost?: string,
     *     DatabasePort?: int,
     *     SecretManagerArn?: string,
     *     DatabaseName?: string,
     *     TableName?: string,
     *     RoleArn?: string,
     *     VpcConfiguration?: VpcConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
