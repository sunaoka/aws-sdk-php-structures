<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\UpdateAutomationRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ruleArn
 * @property int $ruleRevision
 * @property string|null $name
 * @property string|null $description
 * @property 'OrganizationRule'|'AccountRule'|null $ruleType
 * @property Shapes\OrganizationConfiguration|null $organizationConfiguration
 * @property string|null $priority
 * @property list<'SnapshotAndDeleteUnattachedEbsVolume'|'UpgradeEbsVolumeType'>|null $recommendedActionTypes
 * @property Shapes\Criteria|null $criteria
 * @property Shapes\Schedule|null $schedule
 * @property 'Active'|'Inactive'|null $status
 * @property string|null $clientToken
 */
class UpdateAutomationRuleRequest extends Request
{
    /**
     * @param array{
     *     ruleArn: string,
     *     ruleRevision: int,
     *     name?: string|null,
     *     description?: string|null,
     *     ruleType?: 'OrganizationRule'|'AccountRule'|null,
     *     organizationConfiguration?: Shapes\OrganizationConfiguration|null,
     *     priority?: string|null,
     *     recommendedActionTypes?: list<'SnapshotAndDeleteUnattachedEbsVolume'|'UpgradeEbsVolumeType'>|null,
     *     criteria?: Shapes\Criteria|null,
     *     schedule?: Shapes\Schedule|null,
     *     status?: 'Active'|'Inactive'|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
