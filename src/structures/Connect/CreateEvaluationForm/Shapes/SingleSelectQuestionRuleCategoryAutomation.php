<?php

namespace Sunaoka\Aws\Structures\Connect\CreateEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Category
 * @property 'PRESENT'|'NOT_PRESENT' $Condition
 * @property string $OptionRefId
 */
class SingleSelectQuestionRuleCategoryAutomation extends Shape
{
    /**
     * @param array{
     *     Category: string,
     *     Condition: 'PRESENT'|'NOT_PRESENT',
     *     OptionRefId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
