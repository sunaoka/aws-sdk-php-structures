<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetDataQualityRulesetEvaluationRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $WriteObservationResultsEnabled
 * @property CatalogTableConfigOptions|null $CatalogTableConfig
 */
class ObservationResultsOptions extends Shape
{
    /**
     * @param array{
     *     WriteObservationResultsEnabled?: bool|null,
     *     CatalogTableConfig?: CatalogTableConfigOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
