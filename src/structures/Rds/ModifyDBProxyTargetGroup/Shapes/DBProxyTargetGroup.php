<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyDBProxyTargetGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DBProxyName
 * @property string $TargetGroupName
 * @property string $TargetGroupArn
 * @property bool $IsDefault
 * @property string $Status
 * @property ConnectionPoolConfigurationInfo $ConnectionPoolConfig
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property \Aws\Api\DateTimeResult $UpdatedDate
 */
class DBProxyTargetGroup extends Shape
{
    /**
     * @param array{
     *     DBProxyName?: string,
     *     TargetGroupName?: string,
     *     TargetGroupArn?: string,
     *     IsDefault?: bool,
     *     Status?: string,
     *     ConnectionPoolConfig?: ConnectionPoolConfigurationInfo,
     *     CreatedDate?: \Aws\Api\DateTimeResult,
     *     UpdatedDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
