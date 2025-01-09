<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityRulesets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $CreatedBefore
 * @property \Aws\Api\DateTimeResult $CreatedAfter
 * @property \Aws\Api\DateTimeResult $LastModifiedBefore
 * @property \Aws\Api\DateTimeResult $LastModifiedAfter
 * @property DataQualityTargetTable $TargetTable
 */
class DataQualityRulesetFilterCriteria extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Description?: string,
     *     CreatedBefore?: \Aws\Api\DateTimeResult,
     *     CreatedAfter?: \Aws\Api\DateTimeResult,
     *     LastModifiedBefore?: \Aws\Api\DateTimeResult,
     *     LastModifiedAfter?: \Aws\Api\DateTimeResult,
     *     TargetTable?: DataQualityTargetTable
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
