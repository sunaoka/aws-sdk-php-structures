<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\CreateAutomationRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property 'OrganizationRule'|'AccountRule' $ruleType
 * @property Shapes\OrganizationConfiguration|null $organizationConfiguration
 * @property string|null $priority
 * @property list<'SnapshotAndDeleteUnattachedEbsVolume'|'UpgradeEbsVolumeType'> $recommendedActionTypes
 * @property Shapes\Criteria|null $criteria
 * @property Shapes\Schedule $schedule
 * @property 'Active'|'Inactive' $status
 * @property list<Shapes\Tag>|null $tags
 * @property string|null $clientToken
 */
class CreateAutomationRuleRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     ruleType: 'OrganizationRule'|'AccountRule',
     *     organizationConfiguration?: Shapes\OrganizationConfiguration|null,
     *     priority?: string|null,
     *     recommendedActionTypes: list<'SnapshotAndDeleteUnattachedEbsVolume'|'UpgradeEbsVolumeType'>,
     *     criteria?: Shapes\Criteria|null,
     *     schedule: Shapes\Schedule,
     *     status: 'Active'|'Inactive',
     *     tags?: list<Shapes\Tag>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
