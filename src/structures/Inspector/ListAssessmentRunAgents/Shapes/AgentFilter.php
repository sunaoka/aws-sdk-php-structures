<?php

namespace Sunaoka\Aws\Structures\Inspector\ListAssessmentRunAgents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'HEALTHY'|'UNHEALTHY'|'UNKNOWN'> $agentHealths
 * @property list<'IDLE'|'RUNNING'|'SHUTDOWN'|'UNHEALTHY'|'THROTTLED'|'UNKNOWN'> $agentHealthCodes
 */
class AgentFilter extends Shape
{
    /**
     * @param array{
     *     agentHealths: list<'HEALTHY'|'UNHEALTHY'|'UNKNOWN'>,
     *     agentHealthCodes: list<'IDLE'|'RUNNING'|'SHUTDOWN'|'UNHEALTHY'|'THROTTLED'|'UNKNOWN'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
