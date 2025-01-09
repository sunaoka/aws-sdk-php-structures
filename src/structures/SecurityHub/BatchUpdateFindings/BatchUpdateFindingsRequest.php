<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchUpdateFindings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\AwsSecurityFindingIdentifier> $FindingIdentifiers
 * @property Shapes\NoteUpdate $Note
 * @property Shapes\SeverityUpdate $Severity
 * @property 'UNKNOWN'|'TRUE_POSITIVE'|'FALSE_POSITIVE'|'BENIGN_POSITIVE' $VerificationState
 * @property int<0, 100> $Confidence
 * @property int<0, 100> $Criticality
 * @property list<string> $Types
 * @property array<string, string> $UserDefinedFields
 * @property Shapes\WorkflowUpdate $Workflow
 * @property list<Shapes\RelatedFinding> $RelatedFindings
 */
class BatchUpdateFindingsRequest extends Request
{
    /**
     * @param array{
     *     FindingIdentifiers: list<Shapes\AwsSecurityFindingIdentifier>,
     *     Note?: Shapes\NoteUpdate,
     *     Severity?: Shapes\SeverityUpdate,
     *     VerificationState?: 'UNKNOWN'|'TRUE_POSITIVE'|'FALSE_POSITIVE'|'BENIGN_POSITIVE',
     *     Confidence?: int<0, 100>,
     *     Criticality?: int<0, 100>,
     *     Types?: list<string>,
     *     UserDefinedFields?: array<string, string>,
     *     Workflow?: Shapes\WorkflowUpdate,
     *     RelatedFindings?: list<Shapes\RelatedFinding>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
