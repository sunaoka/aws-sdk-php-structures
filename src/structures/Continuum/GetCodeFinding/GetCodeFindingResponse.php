<?php

namespace Sunaoka\Aws\Structures\Continuum\GetCodeFinding;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'CONTINUUM_CODE_VULN'|'CUSTOMER_CODE_VULN' $type
 * @property string $title
 * @property 'UNKNOWN'|'INFORMATIONAL'|'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'|'FATAL'|'OTHER' $severity
 * @property string|null $summary
 * @property string|null $detailedDescription
 * @property string|null $category
 * @property string|null $subCategory
 * @property list<string>|null $cweIds
 * @property string|null $owaspCategory
 * @property string|null $mitigation
 * @property string|null $filePath
 * @property int|null $lineNumber
 * @property string|null $cveId
 * @property double|null $cvssBaseScore
 * @property list<Shapes\AffectedPackage>|null $affectedPackages
 * @property string|null $vulnerableCode
 * @property list<string>|null $relevantInputs
 * @property list<string>|null $stepsToReproduce
 * @property Shapes\FindingValidation|null $validation
 * @property int|null $endLine
 * @property list<string>|null $mitreTechniques
 * @property list<string>|null $remediationReferences
 * @property 'VULNERABILITY_FINDING'|'APPLICATION_SECURITY_POSTURE_FINDING'|null $ocsfClass
 * @property string|null $ocsfSchemaVersion
 * @property string|null $productName
 * @property string|null $productVendorName
 * @property string|null $productVersion
 * @property string|null $sourceStatus
 * @property int|null $sourceStatusId
 * @property \Aws\Api\DateTimeResult|null $firstSeenAt
 * @property list<string>|null $findingTypes
 * @property list<Shapes\FindingVulnerability>|null $vulnerabilities
 * @property list<Shapes\FindingResource>|null $resources
 * @property Shapes\FindingPosture|null $posture
 * @property string $findingId
 * @property string $findingArn
 * @property string $environmentId
 * @property string $source
 * @property string $sourceFindingId
 * @property \Aws\Api\DateTimeResult $reportedAt
 * @property 'SUBMITTED'|'VALIDATING'|'CONFIRMED'|'DISCARDED' $status
 * @property \Aws\Api\DateTimeResult $statusUpdatedAt
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $scanRunId
 * @property string|null $statusMessage
 * @property 'SCANNER_VALIDATED_FALSE_POSITIVE'|'SCANNER_NEEDS_REVIEW'|'FALSE_POSITIVE_VALIDATED_AGAINST_CONTEXT'|'DUPLICATE_OF_OPEN_ISSUE'|'DUPLICATE_OF_CLOSED_ISSUE'|'COMPENSATING_CONTROL_PRESENT'|'OUT_OF_SCOPE'|'INSUFFICIENT_EVIDENCE'|'PROCESSING_FAILED'|'SOURCE_REPO_NOT_FOUND'|null $discardReason
 * @property string|null $discardReasoning
 * @property string|null $duplicateOfIssueId
 * @property string|null $createdIssueId
 * @property \Aws\Api\DateTimeResult|null $completedAt
 */
class GetCodeFindingResponse extends Response
{
}
