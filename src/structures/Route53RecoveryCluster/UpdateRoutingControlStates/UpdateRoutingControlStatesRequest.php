<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryCluster\UpdateRoutingControlStates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\UpdateRoutingControlStateEntry> $UpdateRoutingControlStateEntries
 * @property list<string>|null $SafetyRulesToOverride
 */
class UpdateRoutingControlStatesRequest extends Request
{
    /**
     * @param array{
     *     UpdateRoutingControlStateEntries: list<Shapes\UpdateRoutingControlStateEntry>,
     *     SafetyRulesToOverride?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
