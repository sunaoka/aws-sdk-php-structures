<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\GetAutomationRule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ruleArn
 * @property string|null $ruleId
 * @property string|null $name
 * @property string|null $description
 * @property 'OrganizationRule'|'AccountRule'|null $ruleType
 * @property int|null $ruleRevision
 * @property string|null $accountId
 * @property Shapes\OrganizationConfiguration|null $organizationConfiguration
 * @property string|null $priority
 * @property list<'SnapshotAndDeleteUnattachedEbsVolume'|'UpgradeEbsVolumeType'>|null $recommendedActionTypes
 * @property Shapes\Criteria|null $criteria
 * @property Shapes\Schedule|null $schedule
 * @property 'Active'|'Inactive'|null $status
 * @property list<Shapes\Tag>|null $tags
 * @property \Aws\Api\DateTimeResult|null $createdTimestamp
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedTimestamp
 */
class GetAutomationRuleResponse extends Response
{
}
