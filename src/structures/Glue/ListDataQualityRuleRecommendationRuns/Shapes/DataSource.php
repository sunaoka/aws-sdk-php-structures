<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityRuleRecommendationRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GlueTable|null $GlueTable
 * @property DataQualityGlueTable|null $DataQualityGlueTable
 */
class DataSource extends Shape
{
    /**
     * @param array{
     *     GlueTable?: GlueTable|null,
     *     DataQualityGlueTable?: DataQualityGlueTable|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
