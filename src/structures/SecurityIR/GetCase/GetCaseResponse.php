<?php

namespace Sunaoka\Aws\Structures\SecurityIR\GetCase;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $title
 * @property string $caseArn
 * @property string $description
 * @property 'Submitted'|'Acknowledged'|'Detection and Analysis'|'Containment, Eradication and Recovery'|'Post-incident Activities'|'Ready to Close'|'Closed' $caseStatus
 * @property 'Security Incident'|'Investigation' $engagementType
 * @property \Aws\Api\DateTimeResult $reportedIncidentStartDate
 * @property \Aws\Api\DateTimeResult $actualIncidentStartDate
 * @property list<Shapes\ImpactedAwsRegion> $impactedAwsRegions
 * @property list<Shapes\ThreatActorIp> $threatActorIpAddresses
 * @property 'Customer'|'None' $pendingAction
 * @property list<string> $impactedAccounts
 * @property list<Shapes\Watcher> $watchers
 * @property \Aws\Api\DateTimeResult $createdDate
 * @property \Aws\Api\DateTimeResult $lastUpdatedDate
 * @property 'Investigation Completed'|'Not Resolved'|'False Positive'|'Duplicate' $closureCode
 * @property 'AWS'|'Self' $resolverType
 * @property list<string> $impactedServices
 * @property list<Shapes\CaseAttachmentAttributes> $caseAttachments
 * @property \Aws\Api\DateTimeResult $closedDate
 */
class GetCaseResponse extends Response
{
}
