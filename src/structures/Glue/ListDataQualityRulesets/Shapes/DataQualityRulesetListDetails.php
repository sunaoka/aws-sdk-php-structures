<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityRulesets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $CreatedOn
 * @property \Aws\Api\DateTimeResult|null $LastModifiedOn
 * @property DataQualityTargetTable|null $TargetTable
 * @property string|null $RecommendationRunId
 * @property int|null $RuleCount
 */
class DataQualityRulesetListDetails extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Description?: string|null,
     *     CreatedOn?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedOn?: \Aws\Api\DateTimeResult|null,
     *     TargetTable?: DataQualityTargetTable|null,
     *     RecommendationRunId?: string|null,
     *     RuleCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
