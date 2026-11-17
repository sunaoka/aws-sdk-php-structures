<?php

namespace Sunaoka\Aws\Structures\WellArchitected\CreateAgentOrganizationalProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $displayName
 * @property string|null $description
 * @property string|null $businessOverview
 * @property list<'COST_OPTIMIZATION'|'SECURITY'|'RESILIENCE'|'PERFORMANCE'|'OPERATIONAL_EXCELLENCE'> $pillars
 * @property bool|null $deletionProtection
 * @property string|null $clientToken
 * @property Shapes\OrganizationalAggregationConfiguration|null $organizationalAggregationConfiguration
 * @property list<Shapes\Tag>|null $tags
 */
class CreateAgentOrganizationalProfileRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     displayName?: string|null,
     *     description?: string|null,
     *     businessOverview?: string|null,
     *     pillars: list<'COST_OPTIMIZATION'|'SECURITY'|'RESILIENCE'|'PERFORMANCE'|'OPERATIONAL_EXCELLENCE'>,
     *     deletionProtection?: bool|null,
     *     clientToken?: string|null,
     *     organizationalAggregationConfiguration?: Shapes\OrganizationalAggregationConfiguration|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
