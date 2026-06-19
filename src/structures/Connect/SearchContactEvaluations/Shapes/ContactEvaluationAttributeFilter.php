<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContactEvaluations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ContactEvaluationAttributeAndCondition>|null $OrConditions
 * @property ContactEvaluationAttributeAndCondition|null $AndCondition
 * @property TagCondition|null $TagCondition
 * @property ContactEvaluationAttributeCondition|null $ContactEvaluationAttributeCondition
 */
class ContactEvaluationAttributeFilter extends Shape
{
    /**
     * @param array{
     *     OrConditions?: list<ContactEvaluationAttributeAndCondition>|null,
     *     AndCondition?: ContactEvaluationAttributeAndCondition|null,
     *     TagCondition?: TagCondition|null,
     *     ContactEvaluationAttributeCondition?: ContactEvaluationAttributeCondition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
