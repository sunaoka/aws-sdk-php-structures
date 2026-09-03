<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CONTACT' $ResourceType
 * @property 'TAG' $FilterType
 * @property string $FilterKey
 * @property string $FilterValue
 * @property 'EQUALS' $Operator
 */
class PreEvaluationFilter extends Shape
{
    /**
     * @param array{
     *     ResourceType: 'CONTACT',
     *     FilterType: 'TAG',
     *     FilterKey: string,
     *     FilterValue: string,
     *     Operator: 'EQUALS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
