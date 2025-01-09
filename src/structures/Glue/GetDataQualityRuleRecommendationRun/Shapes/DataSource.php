<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataQualityRuleRecommendationRun\Shapes;

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
