<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\UpdateMetricSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DBInstanceIdentifier
 * @property string|null $DatabaseHost
 * @property int<1, 65535>|null $DatabasePort
 * @property string|null $SecretManagerArn
 * @property string|null $DatabaseName
 * @property string|null $TableName
 * @property string|null $RoleArn
 * @property VpcConfiguration|null $VpcConfiguration
 */
class RDSSourceConfig extends Shape
{
    /**
     * @param array{
     *     DBInstanceIdentifier?: string|null,
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
