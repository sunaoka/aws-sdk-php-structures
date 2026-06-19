<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContactEvaluations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ContactAgentId'|null $AttributeKey
 * @property ContactEvaluationAttributeValue|null $AttributeValue
 * @property 'EXACT'|null $ComparisonType
 */
class ContactEvaluationAttributeCondition extends Shape
{
    /**
     * @param array{
     *     AttributeKey?: 'ContactAgentId'|null,
     *     AttributeValue?: ContactEvaluationAttributeValue|null,
     *     ComparisonType?: 'EXACT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
