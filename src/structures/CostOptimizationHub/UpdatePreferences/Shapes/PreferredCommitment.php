<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\UpdatePreferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OneYear'|'ThreeYears'|null $term
 * @property 'AllUpfront'|'PartialUpfront'|'NoUpfront'|null $paymentOption
 */
class PreferredCommitment extends Shape
{
    /**
     * @param array{
     *     term?: 'OneYear'|'ThreeYears'|null,
     *     paymentOption?: 'AllUpfront'|'PartialUpfront'|'NoUpfront'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
