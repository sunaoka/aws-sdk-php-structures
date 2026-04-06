<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SchemaVersion
 * @property string $Id
 * @property string $ProductArn
 * @property string|null $ProductName
 * @property string|null $CompanyName
 * @property string|null $Region
 * @property string $GeneratorId
 * @property string $AwsAccountId
 * @property list<string>|null $Types
 * @property string|null $FirstObservedAt
 * @property string|null $LastObservedAt
 * @property string $CreatedAt
 * @property string $UpdatedAt
 * @property Severity|null $Severity
 * @property int|null $Confidence
 * @property int|null $Criticality
 * @property string $Title
 * @property string $Description
 * @property Remediation|null $Remediation
 * @property string|null $SourceUrl
 * @property array<string, string>|null $ProductFields
 * @property array<string, string>|null $UserDefinedFields
 * @property list<Malware>|null $Malware
 * @property Network|null $Network
 * @property list<NetworkPathComponent>|null $NetworkPath
 * @property ProcessDetails|null $Process
 * @property list<Threat>|null $Threats
 * @property list<ThreatIntelIndicator>|null $ThreatIntelIndicators
 * @property list<ResourceShape> $Resources
 * @property Compliance|null $Compliance
 * @property 'UNKNOWN'|'TRUE_POSITIVE'|'FALSE_POSITIVE'|'BENIGN_POSITIVE'|null $VerificationState
 * @property 'NEW'|'ASSIGNED'|'IN_PROGRESS'|'DEFERRED'|'RESOLVED'|null $WorkflowState
 * @property Workflow|null $Workflow
 * @property 'ACTIVE'|'ARCHIVED'|null $RecordState
 * @property list<RelatedFinding>|null $RelatedFindings
 * @property Note|null $Note
 * @property list<Vulnerability>|null $Vulnerabilities
 * @property PatchSummary|null $PatchSummary
 * @property Action|null $Action
 * @property FindingProviderFields|null $FindingProviderFields
 * @property bool|null $Sample
 * @property GeneratorDetails|null $GeneratorDetails
 * @property string|null $ProcessedAt
 * @property string|null $AwsAccountName
 * @property Detection|null $Detection
 */
class AwsSecurityFinding extends Shape
{
    /**
     * @param array{
     *     SchemaVersion: string,
     *     Id: string,
     *     ProductArn: string,
     *     ProductName?: string|null,
     *     CompanyName?: string|null,
     *     Region?: string|null,
     *     GeneratorId: string,
     *     AwsAccountId: string,
     *     Types?: list<string>|null,
     *     FirstObservedAt?: string|null,
     *     LastObservedAt?: string|null,
     *     CreatedAt: string,
     *     UpdatedAt: string,
     *     Severity?: Severity|null,
     *     Confidence?: int|null,
     *     Criticality?: int|null,
     *     Title: string,
     *     Description: string,
     *     Remediation?: Remediation|null,
     *     SourceUrl?: string|null,
     *     ProductFields?: array<string, string>|null,
     *     UserDefinedFields?: array<string, string>|null,
     *     Malware?: list<Malware>|null,
     *     Network?: Network|null,
     *     NetworkPath?: list<NetworkPathComponent>|null,
     *     Process?: ProcessDetails|null,
     *     Threats?: list<Threat>|null,
     *     ThreatIntelIndicators?: list<ThreatIntelIndicator>|null,
     *     Resources: list<ResourceShape>,
     *     Compliance?: Compliance|null,
     *     VerificationState?: 'UNKNOWN'|'TRUE_POSITIVE'|'FALSE_POSITIVE'|'BENIGN_POSITIVE'|null,
     *     WorkflowState?: 'NEW'|'ASSIGNED'|'IN_PROGRESS'|'DEFERRED'|'RESOLVED'|null,
     *     Workflow?: Workflow|null,
     *     RecordState?: 'ACTIVE'|'ARCHIVED'|null,
     *     RelatedFindings?: list<RelatedFinding>|null,
     *     Note?: Note|null,
     *     Vulnerabilities?: list<Vulnerability>|null,
     *     PatchSummary?: PatchSummary|null,
     *     Action?: Action|null,
     *     FindingProviderFields?: FindingProviderFields|null,
     *     Sample?: bool|null,
     *     GeneratorDetails?: GeneratorDetails|null,
     *     ProcessedAt?: string|null,
     *     AwsAccountName?: string|null,
     *     Detection?: Detection|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
