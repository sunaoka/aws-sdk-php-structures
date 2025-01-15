<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBProxyTargetGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DBProxyName
 * @property string|null $TargetGroupName
 * @property string|null $TargetGroupArn
 * @property bool|null $IsDefault
 * @property string|null $Status
 * @property ConnectionPoolConfigurationInfo|null $ConnectionPoolConfig
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 * @property \Aws\Api\DateTimeResult|null $UpdatedDate
 */
class DBProxyTargetGroup extends Shape
{
    /**
     * @param array{
     *     DBProxyName?: string|null,
     *     TargetGroupName?: string|null,
     *     TargetGroupArn?: string|null,
     *     IsDefault?: bool|null,
     *     Status?: string|null,
     *     ConnectionPoolConfig?: ConnectionPoolConfigurationInfo|null,
     *     CreatedDate?: \Aws\Api\DateTimeResult|null,
     *     UpdatedDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
