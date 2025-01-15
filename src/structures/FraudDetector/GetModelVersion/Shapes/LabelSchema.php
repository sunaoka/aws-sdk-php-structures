<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetModelVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, list<string>>|null $labelMapper
 * @property 'IGNORE'|'FRAUD'|'LEGIT'|'AUTO'|null $unlabeledEventsTreatment
 */
class LabelSchema extends Shape
{
    /**
     * @param array{
     *     labelMapper?: array<string, list<string>>|null,
     *     unlabeledEventsTreatment?: 'IGNORE'|'FRAUD'|'LEGIT'|'AUTO'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
