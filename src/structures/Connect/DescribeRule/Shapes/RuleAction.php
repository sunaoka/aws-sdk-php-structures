<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATE_TASK'|'ASSIGN_CONTACT_CATEGORY'|'GENERATE_EVENTBRIDGE_EVENT'|'SEND_NOTIFICATION'|'CREATE_CASE'|'UPDATE_CASE'|'END_ASSOCIATED_TASKS'|'SUBMIT_AUTO_EVALUATION' $ActionType
 * @property TaskActionDefinition|null $TaskAction
 * @property EventBridgeActionDefinition|null $EventBridgeAction
 * @property AssignContactCategoryActionDefinition|null $AssignContactCategoryAction
 * @property SendNotificationActionDefinition|null $SendNotificationAction
 * @property CreateCaseActionDefinition|null $CreateCaseAction
 * @property UpdateCaseActionDefinition|null $UpdateCaseAction
 * @property EndAssociatedTasksActionDefinition|null $EndAssociatedTasksAction
 * @property SubmitAutoEvaluationActionDefinition|null $SubmitAutoEvaluationAction
 */
class RuleAction extends Shape
{
    /**
     * @param array{
     *     ActionType: 'CREATE_TASK'|'ASSIGN_CONTACT_CATEGORY'|'GENERATE_EVENTBRIDGE_EVENT'|'SEND_NOTIFICATION'|'CREATE_CASE'|'UPDATE_CASE'|'END_ASSOCIATED_TASKS'|'SUBMIT_AUTO_EVALUATION',
     *     TaskAction?: TaskActionDefinition|null,
     *     EventBridgeAction?: EventBridgeActionDefinition|null,
     *     AssignContactCategoryAction?: AssignContactCategoryActionDefinition|null,
     *     SendNotificationAction?: SendNotificationActionDefinition|null,
     *     CreateCaseAction?: CreateCaseActionDefinition|null,
     *     UpdateCaseAction?: UpdateCaseActionDefinition|null,
     *     EndAssociatedTasksAction?: EndAssociatedTasksActionDefinition|null,
     *     SubmitAutoEvaluationAction?: SubmitAutoEvaluationActionDefinition|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
