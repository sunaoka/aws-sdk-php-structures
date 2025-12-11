<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContactFlows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TagCondition>|null $TagConditions
 * @property ContactFlowTypeCondition|null $ContactFlowTypeCondition
 */
class ContactFlowAttributeAndCondition extends Shape
{
    /**
     * @param array{
     *     TagConditions?: list<TagCondition>|null,
     *     ContactFlowTypeCondition?: ContactFlowTypeCondition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
