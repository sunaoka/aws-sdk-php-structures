<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATE_TASK'|'ASSIGN_CONTACT_CATEGORY'|'GENERATE_EVENTBRIDGE_EVENT'|'SEND_NOTIFICATION'|'CREATE_CASE'|'UPDATE_CASE'|'ASSIGN_SLA'|'END_ASSOCIATED_TASKS'|'SUBMIT_AUTO_EVALUATION'|'EXTRACT_INFORMATION' $ActionType
 * @property TaskActionDefinition|null $TaskAction
 * @property EventBridgeActionDefinition|null $EventBridgeAction
 * @property AssignContactCategoryActionDefinition|null $AssignContactCategoryAction
 * @property SendNotificationActionDefinition|null $SendNotificationAction
 * @property CreateCaseActionDefinition|null $CreateCaseAction
 * @property UpdateCaseActionDefinition|null $UpdateCaseAction
 * @property AssignSlaActionDefinition|null $AssignSlaAction
 * @property EndAssociatedTasksActionDefinition|null $EndAssociatedTasksAction
 * @property SubmitAutoEvaluationActionDefinition|null $SubmitAutoEvaluationAction
 * @property ExtractInformationActionDefinition|null $ExtractInformationAction
 */
class RuleAction extends Shape
{
    /**
     * @param array{
     *     ActionType: 'CREATE_TASK'|'ASSIGN_CONTACT_CATEGORY'|'GENERATE_EVENTBRIDGE_EVENT'|'SEND_NOTIFICATION'|'CREATE_CASE'|'UPDATE_CASE'|'ASSIGN_SLA'|'END_ASSOCIATED_TASKS'|'SUBMIT_AUTO_EVALUATION'|'EXTRACT_INFORMATION',
     *     TaskAction?: TaskActionDefinition|null,
     *     EventBridgeAction?: EventBridgeActionDefinition|null,
     *     AssignContactCategoryAction?: AssignContactCategoryActionDefinition|null,
     *     SendNotificationAction?: SendNotificationActionDefinition|null,
     *     CreateCaseAction?: CreateCaseActionDefinition|null,
     *     UpdateCaseAction?: UpdateCaseActionDefinition|null,
     *     AssignSlaAction?: AssignSlaActionDefinition|null,
     *     EndAssociatedTasksAction?: EndAssociatedTasksActionDefinition|null,
     *     SubmitAutoEvaluationAction?: SubmitAutoEvaluationActionDefinition|null,
     *     ExtractInformationAction?: ExtractInformationActionDefinition|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
