<?php

namespace Sunaoka\Aws\Structures\SecurityIR\UpdateCase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $caseId
 * @property string|null $title
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $reportedIncidentStartDate
 * @property \Aws\Api\DateTimeResult|null $actualIncidentStartDate
 * @property 'Security Incident'|'Investigation'|null $engagementType
 * @property list<Shapes\Watcher>|null $watchersToAdd
 * @property list<Shapes\Watcher>|null $watchersToDelete
 * @property list<Shapes\ThreatActorIp>|null $threatActorIpAddressesToAdd
 * @property list<Shapes\ThreatActorIp>|null $threatActorIpAddressesToDelete
 * @property list<string>|null $impactedServicesToAdd
 * @property list<string>|null $impactedServicesToDelete
 * @property list<Shapes\ImpactedAwsRegion>|null $impactedAwsRegionsToAdd
 * @property list<Shapes\ImpactedAwsRegion>|null $impactedAwsRegionsToDelete
 * @property list<string>|null $impactedAccountsToAdd
 * @property list<string>|null $impactedAccountsToDelete
 * @property list<Shapes\CaseMetadataEntry>|null $caseMetadata
 */
class UpdateCaseRequest extends Request
{
    /**
     * @param array{
     *     caseId: string,
     *     title?: string|null,
     *     description?: string|null,
     *     reportedIncidentStartDate?: \Aws\Api\DateTimeResult|null,
     *     actualIncidentStartDate?: \Aws\Api\DateTimeResult|null,
     *     engagementType?: 'Security Incident'|'Investigation'|null,
     *     watchersToAdd?: list<Shapes\Watcher>|null,
     *     watchersToDelete?: list<Shapes\Watcher>|null,
     *     threatActorIpAddressesToAdd?: list<Shapes\ThreatActorIp>|null,
     *     threatActorIpAddressesToDelete?: list<Shapes\ThreatActorIp>|null,
     *     impactedServicesToAdd?: list<string>|null,
     *     impactedServicesToDelete?: list<string>|null,
     *     impactedAwsRegionsToAdd?: list<Shapes\ImpactedAwsRegion>|null,
     *     impactedAwsRegionsToDelete?: list<Shapes\ImpactedAwsRegion>|null,
     *     impactedAccountsToAdd?: list<string>|null,
     *     impactedAccountsToDelete?: list<string>|null,
     *     caseMetadata?: list<Shapes\CaseMetadataEntry>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
