<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContactFlows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ContactFlowAttributeAndCondition>|null $OrConditions
 * @property ContactFlowAttributeAndCondition|null $AndCondition
 * @property TagCondition|null $TagCondition
 * @property ContactFlowTypeCondition|null $ContactFlowTypeCondition
 */
class ContactFlowAttributeFilter extends Shape
{
    /**
     * @param array{
     *     OrConditions?: list<ContactFlowAttributeAndCondition>|null,
     *     AndCondition?: ContactFlowAttributeAndCondition|null,
     *     TagCondition?: TagCondition|null,
     *     ContactFlowTypeCondition?: ContactFlowTypeCondition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
