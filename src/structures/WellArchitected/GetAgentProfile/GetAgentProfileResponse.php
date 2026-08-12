<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetAgentProfile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $name
 * @property string|null $displayName
 * @property string|null $description
 * @property string|null $businessOverview
 * @property list<'COST_OPTIMIZATION'|'SECURITY'|'RESILIENCE'|'PERFORMANCE'|'OPERATIONAL_EXCELLENCE'> $pillars
 * @property bool|null $deletionProtection
 * @property string $executionRoleArn
 * @property list<Shapes\AggregationConfiguration> $aggregationConfiguration
 * @property string $arn
 * @property bool|null $eligibleForScheduledGeneration
 * @property bool|null $eligibleForArchitectureGeneration
 * @property array<string, string>|null $fieldErrors
 * @property list<Shapes\Tag>|null $tags
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $lastModifiedBy
 * @property \Aws\Api\DateTimeResult|null $lastModifiedAt
 */
class GetAgentProfileResponse extends Response
{
}
