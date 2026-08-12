<?php

namespace Sunaoka\Aws\Structures\WellArchitected\CreateAgentProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $displayName
 * @property string|null $description
 * @property string|null $businessOverview
 * @property list<'COST_OPTIMIZATION'|'SECURITY'|'RESILIENCE'|'PERFORMANCE'|'OPERATIONAL_EXCELLENCE'> $pillars
 * @property bool|null $deletionProtection
 * @property string $executionRoleArn
 * @property list<Shapes\AggregationConfiguration> $aggregationConfiguration
 * @property string|null $clientToken
 * @property list<Shapes\Tag>|null $tags
 */
class CreateAgentProfileRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     displayName?: string|null,
     *     description?: string|null,
     *     businessOverview?: string|null,
     *     pillars: list<'COST_OPTIMIZATION'|'SECURITY'|'RESILIENCE'|'PERFORMANCE'|'OPERATIONAL_EXCELLENCE'>,
     *     deletionProtection?: bool|null,
     *     executionRoleArn: string,
     *     aggregationConfiguration: list<Shapes\AggregationConfiguration>,
     *     clientToken?: string|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
