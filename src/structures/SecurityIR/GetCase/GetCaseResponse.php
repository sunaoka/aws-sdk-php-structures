<?php

namespace Sunaoka\Aws\Structures\SecurityIR\GetCase;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $title
 * @property string|null $caseArn
 * @property string|null $description
 * @property 'Submitted'|'Acknowledged'|'Detection and Analysis'|'Containment, Eradication and Recovery'|'Post-incident Activities'|'Ready to Close'|'Closed'|null $caseStatus
 * @property 'Security Incident'|'Investigation'|null $engagementType
 * @property \Aws\Api\DateTimeResult|null $reportedIncidentStartDate
 * @property \Aws\Api\DateTimeResult|null $actualIncidentStartDate
 * @property list<Shapes\ImpactedAwsRegion>|null $impactedAwsRegions
 * @property list<Shapes\ThreatActorIp>|null $threatActorIpAddresses
 * @property 'Customer'|'None'|null $pendingAction
 * @property list<string>|null $impactedAccounts
 * @property list<Shapes\Watcher>|null $watchers
 * @property \Aws\Api\DateTimeResult|null $createdDate
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDate
 * @property 'Investigation Completed'|'Not Resolved'|'False Positive'|'Duplicate'|null $closureCode
 * @property 'AWS'|'Self'|null $resolverType
 * @property list<string>|null $impactedServices
 * @property list<Shapes\CaseAttachmentAttributes>|null $caseAttachments
 * @property \Aws\Api\DateTimeResult|null $closedDate
 * @property list<Shapes\CaseMetadataEntry>|null $caseMetadata
 */
class GetCaseResponse extends Response
{
}
