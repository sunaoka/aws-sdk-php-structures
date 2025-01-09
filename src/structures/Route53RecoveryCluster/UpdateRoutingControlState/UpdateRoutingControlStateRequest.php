<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryCluster\UpdateRoutingControlState;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RoutingControlArn
 * @property 'On'|'Off' $RoutingControlState
 * @property list<string> $SafetyRulesToOverride
 */
class UpdateRoutingControlStateRequest extends Request
{
    /**
     * @param array{
     *     RoutingControlArn: string,
     *     RoutingControlState: 'On'|'Off',
     *     SafetyRulesToOverride?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
