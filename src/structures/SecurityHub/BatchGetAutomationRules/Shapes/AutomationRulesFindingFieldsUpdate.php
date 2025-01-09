<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchGetAutomationRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NoteUpdate $Note
 * @property SeverityUpdate $Severity
 * @property 'UNKNOWN'|'TRUE_POSITIVE'|'FALSE_POSITIVE'|'BENIGN_POSITIVE' $VerificationState
 * @property int $Confidence
 * @property int $Criticality
 * @property list<string> $Types
 * @property array<string, string> $UserDefinedFields
 * @property WorkflowUpdate $Workflow
 * @property list<RelatedFinding> $RelatedFindings
 */
class AutomationRulesFindingFieldsUpdate extends Shape
{
    /**
     * @param array{
     *     Note?: NoteUpdate,
     *     Severity?: SeverityUpdate,
     *     VerificationState?: 'UNKNOWN'|'TRUE_POSITIVE'|'FALSE_POSITIVE'|'BENIGN_POSITIVE',
     *     Confidence?: int,
     *     Criticality?: int,
     *     Types?: list<string>,
     *     UserDefinedFields?: array<string, string>,
     *     Workflow?: WorkflowUpdate,
     *     RelatedFindings?: list<RelatedFinding>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
