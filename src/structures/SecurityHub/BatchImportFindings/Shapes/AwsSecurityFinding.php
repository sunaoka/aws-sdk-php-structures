<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SchemaVersion
 * @property string $Id
 * @property string $ProductArn
 * @property string $ProductName
 * @property string $CompanyName
 * @property string $Region
 * @property string $GeneratorId
 * @property string $AwsAccountId
 * @property list<string> $Types
 * @property string $FirstObservedAt
 * @property string $LastObservedAt
 * @property string $CreatedAt
 * @property string $UpdatedAt
 * @property Severity $Severity
 * @property int $Confidence
 * @property int $Criticality
 * @property string $Title
 * @property string $Description
 * @property Remediation $Remediation
 * @property string $SourceUrl
 * @property array<string, string> $ProductFields
 * @property array<string, string> $UserDefinedFields
 * @property list<Malware> $Malware
 * @property Network $Network
 * @property list<NetworkPathComponent> $NetworkPath
 * @property ProcessDetails $Process
 * @property list<Threat> $Threats
 * @property list<ThreatIntelIndicator> $ThreatIntelIndicators
 * @property list<Resource> $Resources
 * @property Compliance $Compliance
 * @property 'UNKNOWN'|'TRUE_POSITIVE'|'FALSE_POSITIVE'|'BENIGN_POSITIVE' $VerificationState
 * @property 'NEW'|'ASSIGNED'|'IN_PROGRESS'|'DEFERRED'|'RESOLVED' $WorkflowState
 * @property Workflow $Workflow
 * @property 'ACTIVE'|'ARCHIVED' $RecordState
 * @property list<RelatedFinding> $RelatedFindings
 * @property Note $Note
 * @property list<Vulnerability> $Vulnerabilities
 * @property PatchSummary $PatchSummary
 * @property Action $Action
 * @property FindingProviderFields $FindingProviderFields
 * @property bool $Sample
 * @property GeneratorDetails $GeneratorDetails
 * @property string $ProcessedAt
 * @property string $AwsAccountName
 * @property Detection $Detection
 */
class AwsSecurityFinding extends Shape
{
    /**
     * @param array{
     *     SchemaVersion: string,
     *     Id: string,
     *     ProductArn: string,
     *     ProductName?: string,
     *     CompanyName?: string,
     *     Region?: string,
     *     GeneratorId: string,
     *     AwsAccountId: string,
     *     Types?: list<string>,
     *     FirstObservedAt?: string,
     *     LastObservedAt?: string,
     *     CreatedAt: string,
     *     UpdatedAt: string,
     *     Severity?: Severity,
     *     Confidence?: int,
     *     Criticality?: int,
     *     Title: string,
     *     Description: string,
     *     Remediation?: Remediation,
     *     SourceUrl?: string,
     *     ProductFields?: array<string, string>,
     *     UserDefinedFields?: array<string, string>,
     *     Malware?: list<Malware>,
     *     Network?: Network,
     *     NetworkPath?: list<NetworkPathComponent>,
     *     Process?: ProcessDetails,
     *     Threats?: list<Threat>,
     *     ThreatIntelIndicators?: list<ThreatIntelIndicator>,
     *     Resources: list<Resource>,
     *     Compliance?: Compliance,
     *     VerificationState?: 'UNKNOWN'|'TRUE_POSITIVE'|'FALSE_POSITIVE'|'BENIGN_POSITIVE',
     *     WorkflowState?: 'NEW'|'ASSIGNED'|'IN_PROGRESS'|'DEFERRED'|'RESOLVED',
     *     Workflow?: Workflow,
     *     RecordState?: 'ACTIVE'|'ARCHIVED',
     *     RelatedFindings?: list<RelatedFinding>,
     *     Note?: Note,
     *     Vulnerabilities?: list<Vulnerability>,
     *     PatchSummary?: PatchSummary,
     *     Action?: Action,
     *     FindingProviderFields?: FindingProviderFields,
     *     Sample?: bool,
     *     GeneratorDetails?: GeneratorDetails,
     *     ProcessedAt?: string,
     *     AwsAccountName?: string,
     *     Detection?: Detection
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
