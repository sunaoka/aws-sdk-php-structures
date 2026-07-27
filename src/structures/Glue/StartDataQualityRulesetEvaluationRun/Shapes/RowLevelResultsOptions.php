<?php

namespace Sunaoka\Aws\Structures\Glue\StartDataQualityRulesetEvaluationRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $MaxRowsToWrite
 * @property 'ALL'|'PASSED_ONLY'|'FAILED_ONLY'|null $ResultType
 * @property CatalogTableConfigOptions|null $CatalogTableConfig
 */
class RowLevelResultsOptions extends Shape
{
    /**
     * @param array{
     *     MaxRowsToWrite?: int|null,
     *     ResultType?: 'ALL'|'PASSED_ONLY'|'FAILED_ONLY'|null,
     *     CatalogTableConfig?: CatalogTableConfigOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
