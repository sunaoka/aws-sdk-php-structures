<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityRuleRecommendationRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GlueTable $GlueTable
 */
class DataSource extends Shape
{
    /**
     * @param array{GlueTable: GlueTable} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
