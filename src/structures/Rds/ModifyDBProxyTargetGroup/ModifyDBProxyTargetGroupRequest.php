<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyDBProxyTargetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TargetGroupName
 * @property string $DBProxyName
 * @property Shapes\ConnectionPoolConfiguration|null $ConnectionPoolConfig
 * @property string|null $NewName
 */
class ModifyDBProxyTargetGroupRequest extends Request
{
    /**
     * @param array{
     *     TargetGroupName: string,
     *     DBProxyName: string,
     *     ConnectionPoolConfig?: Shapes\ConnectionPoolConfiguration|null,
     *     NewName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
