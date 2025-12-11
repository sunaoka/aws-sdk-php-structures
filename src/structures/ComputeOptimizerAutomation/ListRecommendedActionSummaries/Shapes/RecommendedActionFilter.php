<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\ListRecommendedActionSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ResourceType'|'RecommendedActionType'|'ResourceId'|'LookBackPeriodInDays'|'CurrentResourceDetailsEbsVolumeType'|'ResourceTagsKey'|'ResourceTagsValue'|'AccountId'|'RestartNeeded' $name
 * @property list<string> $values
 */
class RecommendedActionFilter extends Shape
{
    /**
     * @param array{
     *     name: 'ResourceType'|'RecommendedActionType'|'ResourceId'|'LookBackPeriodInDays'|'CurrentResourceDetailsEbsVolumeType'|'ResourceTagsKey'|'ResourceTagsValue'|'AccountId'|'RestartNeeded',
     *     values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
