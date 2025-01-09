<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATE_TASK'|'ASSIGN_CONTACT_CATEGORY'|'GENERATE_EVENTBRIDGE_EVENT'|'SEND_NOTIFICATION'|'CREATE_CASE'|'UPDATE_CASE'|'END_ASSOCIATED_TASKS'|'SUBMIT_AUTO_EVALUATION' $ActionType
 * @property TaskActionDefinition $TaskAction
 * @property EventBridgeActionDefinition $EventBridgeAction
 * @property AssignContactCategoryActionDefinition $AssignContactCategoryAction
 * @property SendNotificationActionDefinition $SendNotificationAction
 * @property CreateCaseActionDefinition $CreateCaseAction
 * @property UpdateCaseActionDefinition $UpdateCaseAction
 * @property EndAssociatedTasksActionDefinition $EndAssociatedTasksAction
 * @property SubmitAutoEvaluationActionDefinition $SubmitAutoEvaluationAction
 */
class RuleAction extends Shape
{
    /**
     * @param array{
     *     ActionType: 'CREATE_TASK'|'ASSIGN_CONTACT_CATEGORY'|'GENERATE_EVENTBRIDGE_EVENT'|'SEND_NOTIFICATION'|'CREATE_CASE'|'UPDATE_CASE'|'END_ASSOCIATED_TASKS'|'SUBMIT_AUTO_EVALUATION',
     *     TaskAction?: TaskActionDefinition,
     *     EventBridgeAction?: EventBridgeActionDefinition,
     *     AssignContactCategoryAction?: AssignContactCategoryActionDefinition,
     *     SendNotificationAction?: SendNotificationActionDefinition,
     *     CreateCaseAction?: CreateCaseActionDefinition,
     *     UpdateCaseAction?: UpdateCaseActionDefinition,
     *     EndAssociatedTasksAction?: EndAssociatedTasksActionDefinition,
     *     SubmitAutoEvaluationAction?: SubmitAutoEvaluationActionDefinition
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
