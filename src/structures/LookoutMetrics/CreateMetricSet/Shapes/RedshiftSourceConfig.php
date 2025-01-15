<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\CreateMetricSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClusterIdentifier
 * @property string|null $DatabaseHost
 * @property int<1, 65535>|null $DatabasePort
 * @property string|null $SecretManagerArn
 * @property string|null $DatabaseName
 * @property string|null $TableName
 * @property string|null $RoleArn
 * @property VpcConfiguration|null $VpcConfiguration
 */
class RedshiftSourceConfig extends Shape
{
    /**
     * @param array{
     *     ClusterIdentifier?: string|null,
     *     DatabaseHost?: string|null,
     *     DatabasePort?: int<1, 65535>|null,
     *     SecretManagerArn?: string|null,
     *     DatabaseName?: string|null,
     *     TableName?: string|null,
     *     RoleArn?: string|null,
     *     VpcConfiguration?: VpcConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
