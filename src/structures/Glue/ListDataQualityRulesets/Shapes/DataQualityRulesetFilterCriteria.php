<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityRulesets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $CreatedBefore
 * @property \Aws\Api\DateTimeResult|null $CreatedAfter
 * @property \Aws\Api\DateTimeResult|null $LastModifiedBefore
 * @property \Aws\Api\DateTimeResult|null $LastModifiedAfter
 * @property DataQualityTargetTable|null $TargetTable
 */
class DataQualityRulesetFilterCriteria extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Description?: string|null,
     *     CreatedBefore?: \Aws\Api\DateTimeResult|null,
     *     CreatedAfter?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedBefore?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedAfter?: \Aws\Api\DateTimeResult|null,
     *     TargetTable?: DataQualityTargetTable|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
