<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATE_TASK'|'ASSIGN_CONTACT_CATEGORY'|'GENERATE_EVENTBRIDGE_EVENT'|'SEND_NOTIFICATION' $ActionType
 * @property TaskActionDefinition|null $TaskAction
 * @property EventBridgeActionDefinition|null $EventBridgeAction
 * @property AssignContactCategoryActionDefinition|null $AssignContactCategoryAction
 * @property SendNotificationActionDefinition|null $SendNotificationAction
 */
class RuleAction extends Shape
{
    /**
     * @param array{
     *     ActionType: 'CREATE_TASK'|'ASSIGN_CONTACT_CATEGORY'|'GENERATE_EVENTBRIDGE_EVENT'|'SEND_NOTIFICATION',
     *     TaskAction?: TaskActionDefinition|null,
     *     EventBridgeAction?: EventBridgeActionDefinition|null,
     *     AssignContactCategoryAction?: AssignContactCategoryActionDefinition|null,
     *     SendNotificationAction?: SendNotificationActionDefinition|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
