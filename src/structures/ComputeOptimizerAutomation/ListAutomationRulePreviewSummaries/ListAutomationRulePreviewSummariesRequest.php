<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\ListAutomationRulePreviewSummaries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'OrganizationRule'|'AccountRule' $ruleType
 * @property Shapes\OrganizationScope|null $organizationScope
 * @property list<'SnapshotAndDeleteUnattachedEbsVolume'|'UpgradeEbsVolumeType'> $recommendedActionTypes
 * @property Shapes\Criteria|null $criteria
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListAutomationRulePreviewSummariesRequest extends Request
{
    /**
     * @param array{
     *     ruleType: 'OrganizationRule'|'AccountRule',
     *     organizationScope?: Shapes\OrganizationScope|null,
     *     recommendedActionTypes: list<'SnapshotAndDeleteUnattachedEbsVolume'|'UpgradeEbsVolumeType'>,
     *     criteria?: Shapes\Criteria|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
