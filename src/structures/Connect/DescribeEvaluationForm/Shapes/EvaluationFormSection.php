<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Title
 * @property string $RefId
 * @property string $Instructions
 * @property list<EvaluationFormItem> $Items
 * @property double $Weight
 */
class EvaluationFormSection extends Shape
{
    /**
     * @param array{
     *     Title: string,
     *     RefId: string,
     *     Instructions?: string,
     *     Items: list<EvaluationFormItem>,
     *     Weight?: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
