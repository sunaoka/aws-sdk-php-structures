<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Title
 * @property string $RefId
 * @property string|null $Instructions
 * @property list<EvaluationFormItem> $Items
 * @property double|null $Weight
 * @property bool|null $IsExcludedFromScoring
 * @property list<EvaluationFormScoreThreshold>|null $ScoreThresholds
 */
class EvaluationFormSection extends Shape
{
    /**
     * @param array{
     *     Title: string,
     *     RefId: string,
     *     Instructions?: string|null,
     *     Items: list<EvaluationFormItem>,
     *     Weight?: double|null,
     *     IsExcludedFromScoring?: bool|null,
     *     ScoreThresholds?: list<EvaluationFormScoreThreshold>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
