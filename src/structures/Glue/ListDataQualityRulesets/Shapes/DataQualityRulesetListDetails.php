<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityRulesets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $CreatedOn
 * @property \Aws\Api\DateTimeResult $LastModifiedOn
 * @property DataQualityTargetTable $TargetTable
 * @property string $RecommendationRunId
 * @property int $RuleCount
 */
class DataQualityRulesetListDetails extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Description?: string,
     *     CreatedOn?: \Aws\Api\DateTimeResult,
     *     LastModifiedOn?: \Aws\Api\DateTimeResult,
     *     TargetTable?: DataQualityTargetTable,
     *     RecommendationRunId?: string,
     *     RuleCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
