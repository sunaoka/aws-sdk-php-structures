<?php

namespace Sunaoka\Aws\Structures\Glue\StartDataQualityRulesetEvaluationRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $WriteDistributionResultsEnabled
 * @property CatalogTableConfigOptions|null $CatalogTableConfig
 */
class DistributionResultsOptions extends Shape
{
    /**
     * @param array{
     *     WriteDistributionResultsEnabled?: bool|null,
     *     CatalogTableConfig?: CatalogTableConfigOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
