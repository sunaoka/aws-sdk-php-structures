<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetDataQualityRulesetEvaluationRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $WriteProfilingResultsEnabled
 * @property CatalogTableConfigOptions|null $CatalogTableConfig
 * @property DistributionResultsOptions|null $DistributionResults
 */
class ProfilingResultsOptions extends Shape
{
    /**
     * @param array{
     *     WriteProfilingResultsEnabled?: bool|null,
     *     CatalogTableConfig?: CatalogTableConfigOptions|null,
     *     DistributionResults?: DistributionResultsOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
