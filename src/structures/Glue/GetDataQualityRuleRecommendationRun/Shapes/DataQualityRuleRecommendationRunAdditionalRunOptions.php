<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataQualityRuleRecommendationRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CustomLogGroupPrefix
 */
class DataQualityRuleRecommendationRunAdditionalRunOptions extends Shape
{
    /**
     * @param array{CustomLogGroupPrefix?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
