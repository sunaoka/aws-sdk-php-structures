<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DescribeMetricSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DBInstanceIdentifier
 * @property string $DatabaseHost
 * @property int<1, 65535> $DatabasePort
 * @property string $SecretManagerArn
 * @property string $DatabaseName
 * @property string $TableName
 * @property string $RoleArn
 * @property VpcConfiguration $VpcConfiguration
 */
class RDSSourceConfig extends Shape
{
    /**
     * @param array{
     *     DBInstanceIdentifier?: string,
     *     DatabaseHost?: string,
     *     DatabasePort?: int<1, 65535>,
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
