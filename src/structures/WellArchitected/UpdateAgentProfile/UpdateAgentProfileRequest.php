<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateAgentProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $profileArn
 * @property string|null $displayName
 * @property string|null $description
 * @property string|null $executionRoleArn
 * @property list<Shapes\AggregationConfiguration>|null $aggregationConfiguration
 * @property string|null $businessOverview
 * @property list<'COST_OPTIMIZATION'|'SECURITY'|'RESILIENCE'|'PERFORMANCE'|'OPERATIONAL_EXCELLENCE'>|null $pillars
 * @property bool|null $deletionProtection
 */
class UpdateAgentProfileRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     profileArn: string,
     *     displayName?: string|null,
     *     description?: string|null,
     *     executionRoleArn?: string|null,
     *     aggregationConfiguration?: list<Shapes\AggregationConfiguration>|null,
     *     businessOverview?: string|null,
     *     pillars?: list<'COST_OPTIMIZATION'|'SECURITY'|'RESILIENCE'|'PERFORMANCE'|'OPERATIONAL_EXCELLENCE'>|null,
     *     deletionProtection?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
