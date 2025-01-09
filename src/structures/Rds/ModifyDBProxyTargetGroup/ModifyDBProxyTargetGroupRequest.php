<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyDBProxyTargetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TargetGroupName
 * @property string $DBProxyName
 * @property Shapes\ConnectionPoolConfiguration $ConnectionPoolConfig
 * @property string $NewName
 */
class ModifyDBProxyTargetGroupRequest extends Request
{
    /**
     * @param array{
     *     TargetGroupName: string,
     *     DBProxyName: string,
     *     ConnectionPoolConfig?: Shapes\ConnectionPoolConfiguration,
     *     NewName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
