<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateAgentOrganizationalProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $profileArn
 * @property string|null $displayName
 * @property string|null $description
 * @property string|null $businessOverview
 * @property list<'COST_OPTIMIZATION'|'SECURITY'|'RESILIENCE'|'PERFORMANCE'|'OPERATIONAL_EXCELLENCE'>|null $pillars
 * @property bool|null $deletionProtection
 * @property Shapes\OrganizationalAggregationConfiguration|null $organizationalAggregationConfiguration
 */
class UpdateAgentOrganizationalProfileRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     profileArn: string,
     *     displayName?: string|null,
     *     description?: string|null,
     *     businessOverview?: string|null,
     *     pillars?: list<'COST_OPTIMIZATION'|'SECURITY'|'RESILIENCE'|'PERFORMANCE'|'OPERATIONAL_EXCELLENCE'>|null,
     *     deletionProtection?: bool|null,
     *     organizationalAggregationConfiguration?: Shapes\OrganizationalAggregationConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
