<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CONTACT'|'CONTACT_EVALUATION' $ResourceType
 * @property 'TAG' $FilterType
 * @property string $FilterKey
 * @property string $FilterValue
 * @property 'EQUALS' $Operator
 */
class PreEvaluationFilter extends Shape
{
    /**
     * @param array{
     *     ResourceType: 'CONTACT'|'CONTACT_EVALUATION',
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
