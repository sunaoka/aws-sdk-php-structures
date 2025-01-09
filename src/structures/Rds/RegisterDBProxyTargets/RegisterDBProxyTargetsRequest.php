<?php

namespace Sunaoka\Aws\Structures\Rds\RegisterDBProxyTargets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBProxyName
 * @property string $TargetGroupName
 * @property list<string> $DBInstanceIdentifiers
 * @property list<string> $DBClusterIdentifiers
 */
class RegisterDBProxyTargetsRequest extends Request
{
    /**
     * @param array{
     *     DBProxyName: string,
     *     TargetGroupName?: string,
     *     DBInstanceIdentifiers?: list<string>,
     *     DBClusterIdentifiers?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
