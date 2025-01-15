<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchUpdateFindings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\AwsSecurityFindingIdentifier> $FindingIdentifiers
 * @property Shapes\NoteUpdate|null $Note
 * @property Shapes\SeverityUpdate|null $Severity
 * @property 'UNKNOWN'|'TRUE_POSITIVE'|'FALSE_POSITIVE'|'BENIGN_POSITIVE'|null $VerificationState
 * @property int<0, 100>|null $Confidence
 * @property int<0, 100>|null $Criticality
 * @property list<string>|null $Types
 * @property array<string, string>|null $UserDefinedFields
 * @property Shapes\WorkflowUpdate|null $Workflow
 * @property list<Shapes\RelatedFinding>|null $RelatedFindings
 */
class BatchUpdateFindingsRequest extends Request
{
    /**
     * @param array{
     *     FindingIdentifiers: list<Shapes\AwsSecurityFindingIdentifier>,
     *     Note?: Shapes\NoteUpdate|null,
     *     Severity?: Shapes\SeverityUpdate|null,
     *     VerificationState?: 'UNKNOWN'|'TRUE_POSITIVE'|'FALSE_POSITIVE'|'BENIGN_POSITIVE'|null,
     *     Confidence?: int<0, 100>|null,
     *     Criticality?: int<0, 100>|null,
     *     Types?: list<string>|null,
     *     UserDefinedFields?: array<string, string>|null,
     *     Workflow?: Shapes\WorkflowUpdate|null,
     *     RelatedFindings?: list<Shapes\RelatedFinding>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
