<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContactFlowModules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ContactFlowModuleSearchCriteria>|null $OrConditions
 * @property list<ContactFlowModuleSearchCriteria>|null $AndConditions
 * @property StringCondition|null $StringCondition
 * @property 'ACTIVE'|'ARCHIVED'|null $StateCondition
 * @property 'PUBLISHED'|'SAVED'|null $StatusCondition
 */
class ContactFlowModuleSearchCriteria extends Shape
{
    /**
     * @param array{
     *     OrConditions?: list<ContactFlowModuleSearchCriteria>|null,
     *     AndConditions?: list<ContactFlowModuleSearchCriteria>|null,
     *     StringCondition?: StringCondition|null,
     *     StateCondition?: 'ACTIVE'|'ARCHIVED'|null,
     *     StatusCondition?: 'PUBLISHED'|'SAVED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
