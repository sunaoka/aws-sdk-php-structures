<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\ListAutomationRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ruleArn
 * @property string|null $ruleId
 * @property string|null $name
 * @property string|null $description
 * @property 'OrganizationRule'|'AccountRule'|null $ruleType
 * @property int|null $ruleRevision
 * @property string|null $accountId
 * @property OrganizationConfiguration|null $organizationConfiguration
 * @property string|null $priority
 * @property list<'SnapshotAndDeleteUnattachedEbsVolume'|'UpgradeEbsVolumeType'>|null $recommendedActionTypes
 * @property Schedule|null $schedule
 * @property 'Active'|'Inactive'|null $status
 * @property \Aws\Api\DateTimeResult|null $createdTimestamp
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedTimestamp
 */
class AutomationRule extends Shape
{
    /**
     * @param array{
     *     ruleArn?: string|null,
     *     ruleId?: string|null,
     *     name?: string|null,
     *     description?: string|null,
     *     ruleType?: 'OrganizationRule'|'AccountRule'|null,
     *     ruleRevision?: int|null,
     *     accountId?: string|null,
     *     organizationConfiguration?: OrganizationConfiguration|null,
     *     priority?: string|null,
     *     recommendedActionTypes?: list<'SnapshotAndDeleteUnattachedEbsVolume'|'UpgradeEbsVolumeType'>|null,
     *     schedule?: Schedule|null,
     *     status?: 'Active'|'Inactive'|null,
     *     createdTimestamp?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
