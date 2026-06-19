<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContactEvaluations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TagCondition>|null $TagConditions
 * @property list<ContactEvaluationAttributeCondition>|null $AttributeConditions
 */
class ContactEvaluationAttributeAndCondition extends Shape
{
    /**
     * @param array{
     *     TagConditions?: list<TagCondition>|null,
     *     AttributeConditions?: list<ContactEvaluationAttributeCondition>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
