<?php

namespace Sunaoka\Aws\Structures\FraudDetector\CreateModelVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, list<string>> $labelMapper
 * @property 'IGNORE'|'FRAUD'|'LEGIT'|'AUTO' $unlabeledEventsTreatment
 */
class LabelSchema extends Shape
{
    /**
     * @param array{
     *     labelMapper?: array<string, list<string>>,
     *     unlabeledEventsTreatment?: 'IGNORE'|'FRAUD'|'LEGIT'|'AUTO'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
