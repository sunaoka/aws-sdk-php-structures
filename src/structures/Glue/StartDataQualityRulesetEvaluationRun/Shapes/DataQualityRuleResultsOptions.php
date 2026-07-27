<?php

namespace Sunaoka\Aws\Structures\Glue\StartDataQualityRulesetEvaluationRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $WriteDataQualityRuleResultsEnabled
 * @property CatalogTableConfigOptions|null $CatalogTableConfig
 */
class DataQualityRuleResultsOptions extends Shape
{
    /**
     * @param array{
     *     WriteDataQualityRuleResultsEnabled?: bool|null,
     *     CatalogTableConfig?: CatalogTableConfigOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
