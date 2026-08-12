<?php

namespace Sunaoka\Aws\Structures\WellArchitected\CreateAgentGoal;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $profileArn
 * @property list<'COST_OPTIMIZATION'|'SECURITY'|'RESILIENCE'|'PERFORMANCE'|'OPERATIONAL_EXCELLENCE'> $pillars
 * @property string $title
 * @property string|null $description
 */
class CreateAgentGoalRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     profileArn: string,
     *     pillars: list<'COST_OPTIMIZATION'|'SECURITY'|'RESILIENCE'|'PERFORMANCE'|'OPERATIONAL_EXCELLENCE'>,
     *     title: string,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
