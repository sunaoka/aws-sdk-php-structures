<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\ListAutomationRulePreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StringCriteriaCondition>|null $region
 * @property list<StringCriteriaCondition>|null $resourceArn
 * @property list<StringCriteriaCondition>|null $ebsVolumeType
 * @property list<IntegerCriteriaCondition>|null $ebsVolumeSizeInGib
 * @property list<DoubleCriteriaCondition>|null $estimatedMonthlySavings
 * @property list<ResourceTagsCriteriaCondition>|null $resourceTag
 * @property list<IntegerCriteriaCondition>|null $lookBackPeriodInDays
 * @property list<StringCriteriaCondition>|null $restartNeeded
 */
class Criteria extends Shape
{
    /**
     * @param array{
     *     region?: list<StringCriteriaCondition>|null,
     *     resourceArn?: list<StringCriteriaCondition>|null,
     *     ebsVolumeType?: list<StringCriteriaCondition>|null,
     *     ebsVolumeSizeInGib?: list<IntegerCriteriaCondition>|null,
     *     estimatedMonthlySavings?: list<DoubleCriteriaCondition>|null,
     *     resourceTag?: list<ResourceTagsCriteriaCondition>|null,
     *     lookBackPeriodInDays?: list<IntegerCriteriaCondition>|null,
     *     restartNeeded?: list<StringCriteriaCondition>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
