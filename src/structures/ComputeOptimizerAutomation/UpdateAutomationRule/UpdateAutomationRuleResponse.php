<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\UpdateAutomationRule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ruleArn
 * @property int|null $ruleRevision
 * @property string|null $name
 * @property string|null $description
 * @property 'OrganizationRule'|'AccountRule'|null $ruleType
 * @property Shapes\OrganizationConfiguration|null $organizationConfiguration
 * @property string|null $priority
 * @property list<'SnapshotAndDeleteUnattachedEbsVolume'|'UpgradeEbsVolumeType'>|null $recommendedActionTypes
 * @property Shapes\Criteria|null $criteria
 * @property Shapes\Schedule|null $schedule
 * @property 'Active'|'Inactive'|null $status
 * @property \Aws\Api\DateTimeResult|null $createdTimestamp
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedTimestamp
 */
class UpdateAutomationRuleResponse extends Response
{
}
