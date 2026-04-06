<?php

namespace Sunaoka\Aws\Structures\Textract\GetAdapterVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EvaluationMetric|null $Baseline
 * @property EvaluationMetric|null $AdapterVersion
 * @property 'TABLES'|'FORMS'|'QUERIES'|'SIGNATURES'|'LAYOUT'|null $FeatureType
 */
class AdapterVersionEvaluationMetric extends Shape
{
    /**
     * @param array{
     *     Baseline?: EvaluationMetric|null,
     *     AdapterVersion?: EvaluationMetric|null,
     *     FeatureType?: 'TABLES'|'FORMS'|'QUERIES'|'SIGNATURES'|'LAYOUT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
