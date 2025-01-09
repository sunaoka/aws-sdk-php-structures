<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContactFlowModules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ContactFlowModuleSearchCriteria> $OrConditions
 * @property list<ContactFlowModuleSearchCriteria> $AndConditions
 * @property StringCondition $StringCondition
 * @property 'ACTIVE'|'ARCHIVED' $StateCondition
 * @property 'PUBLISHED'|'SAVED' $StatusCondition
 */
class ContactFlowModuleSearchCriteria extends Shape
{
    /**
     * @param array{
     *     OrConditions?: list<ContactFlowModuleSearchCriteria>,
     *     AndConditions?: list<ContactFlowModuleSearchCriteria>,
     *     StringCondition?: StringCondition,
     *     StateCondition?: 'ACTIVE'|'ARCHIVED',
     *     StatusCondition?: 'PUBLISHED'|'SAVED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
