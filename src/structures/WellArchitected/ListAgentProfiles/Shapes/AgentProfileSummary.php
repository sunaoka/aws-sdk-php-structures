<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListAgentProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $displayName
 * @property string|null $description
 * @property string|null $businessOverview
 * @property list<'COST_OPTIMIZATION'|'SECURITY'|'RESILIENCE'|'PERFORMANCE'|'OPERATIONAL_EXCELLENCE'> $pillars
 * @property bool|null $deletionProtection
 * @property string $executionRoleArn
 * @property list<AggregationConfiguration> $aggregationConfiguration
 * @property string $arn
 * @property bool|null $eligibleForScheduledGeneration
 * @property bool|null $eligibleForArchitectureGeneration
 * @property array<string, string>|null $fieldErrors
 * @property list<Tag>|null $tags
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $lastModifiedBy
 * @property \Aws\Api\DateTimeResult|null $lastModifiedAt
 */
class AgentProfileSummary extends Shape
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
     *     aggregationConfiguration: list<AggregationConfiguration>,
     *     arn: string,
     *     eligibleForScheduledGeneration?: bool|null,
     *     eligibleForArchitectureGeneration?: bool|null,
     *     fieldErrors?: array<string, string>|null,
     *     tags?: list<Tag>|null,
     *     createdBy: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     lastModifiedBy?: string|null,
     *     lastModifiedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
