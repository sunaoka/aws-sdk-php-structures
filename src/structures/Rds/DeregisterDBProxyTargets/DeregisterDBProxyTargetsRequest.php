<?php

namespace Sunaoka\Aws\Structures\Rds\DeregisterDBProxyTargets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBProxyName
 * @property string|null $TargetGroupName
 * @property list<string>|null $DBInstanceIdentifiers
 * @property list<string>|null $DBClusterIdentifiers
 */
class DeregisterDBProxyTargetsRequest extends Request
{
    /**
     * @param array{
     *     DBProxyName: string,
     *     TargetGroupName?: string|null,
     *     DBInstanceIdentifiers?: list<string>|null,
     *     DBClusterIdentifiers?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
