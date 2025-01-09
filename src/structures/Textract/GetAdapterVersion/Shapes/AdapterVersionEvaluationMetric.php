<?php

namespace Sunaoka\Aws\Structures\Textract\GetAdapterVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EvaluationMetric $Baseline
 * @property EvaluationMetric $AdapterVersion
 * @property 'TABLES'|'FORMS'|'QUERIES'|'SIGNATURES'|'LAYOUT' $FeatureType
 */
class AdapterVersionEvaluationMetric extends Shape
{
    /**
     * @param array{
     *     Baseline?: EvaluationMetric,
     *     AdapterVersion?: EvaluationMetric,
     *     FeatureType?: 'TABLES'|'FORMS'|'QUERIES'|'SIGNATURES'|'LAYOUT'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
