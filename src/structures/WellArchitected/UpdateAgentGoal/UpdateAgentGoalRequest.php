<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateAgentGoal;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $profileArn
 * @property string $id
 * @property list<'COST_OPTIMIZATION'|'SECURITY'|'RESILIENCE'|'PERFORMANCE'|'OPERATIONAL_EXCELLENCE'>|null $pillars
 * @property string|null $title
 * @property string|null $description
 */
class UpdateAgentGoalRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     profileArn: string,
     *     id: string,
     *     pillars?: list<'COST_OPTIMIZATION'|'SECURITY'|'RESILIENCE'|'PERFORMANCE'|'OPERATIONAL_EXCELLENCE'>|null,
     *     title?: string|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
