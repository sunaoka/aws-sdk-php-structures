<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContactEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Category
 * @property 'PRESENT'|'NOT_PRESENT' $Condition
 * @property list<string> $OptionRefIds
 */
class MultiSelectQuestionRuleCategoryAutomation extends Shape
{
    /**
     * @param array{
     *     Category: string,
     *     Condition: 'PRESENT'|'NOT_PRESENT',
     *     OptionRefIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
