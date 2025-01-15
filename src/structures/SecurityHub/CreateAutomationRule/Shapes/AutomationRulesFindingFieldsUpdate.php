<?php

namespace Sunaoka\Aws\Structures\SecurityHub\CreateAutomationRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NoteUpdate|null $Note
 * @property SeverityUpdate|null $Severity
 * @property 'UNKNOWN'|'TRUE_POSITIVE'|'FALSE_POSITIVE'|'BENIGN_POSITIVE'|null $VerificationState
 * @property int<0, 100>|null $Confidence
 * @property int<0, 100>|null $Criticality
 * @property list<string>|null $Types
 * @property array<string, string>|null $UserDefinedFields
 * @property WorkflowUpdate|null $Workflow
 * @property list<RelatedFinding>|null $RelatedFindings
 */
class AutomationRulesFindingFieldsUpdate extends Shape
{
    /**
     * @param array{
     *     Note?: NoteUpdate|null,
     *     Severity?: SeverityUpdate|null,
     *     VerificationState?: 'UNKNOWN'|'TRUE_POSITIVE'|'FALSE_POSITIVE'|'BENIGN_POSITIVE'|null,
     *     Confidence?: int<0, 100>|null,
     *     Criticality?: int<0, 100>|null,
     *     Types?: list<string>|null,
     *     UserDefinedFields?: array<string, string>|null,
     *     Workflow?: WorkflowUpdate|null,
     *     RelatedFindings?: list<RelatedFinding>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
