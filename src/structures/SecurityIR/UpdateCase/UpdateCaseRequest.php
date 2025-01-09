<?php

namespace Sunaoka\Aws\Structures\SecurityIR\UpdateCase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $caseId
 * @property string $title
 * @property string $description
 * @property \Aws\Api\DateTimeResult $reportedIncidentStartDate
 * @property \Aws\Api\DateTimeResult $actualIncidentStartDate
 * @property 'Security Incident'|'Investigation' $engagementType
 * @property list<Shapes\Watcher> $watchersToAdd
 * @property list<Shapes\Watcher> $watchersToDelete
 * @property list<Shapes\ThreatActorIp> $threatActorIpAddressesToAdd
 * @property list<Shapes\ThreatActorIp> $threatActorIpAddressesToDelete
 * @property list<string> $impactedServicesToAdd
 * @property list<string> $impactedServicesToDelete
 * @property list<Shapes\ImpactedAwsRegion> $impactedAwsRegionsToAdd
 * @property list<Shapes\ImpactedAwsRegion> $impactedAwsRegionsToDelete
 * @property list<string> $impactedAccountsToAdd
 * @property list<string> $impactedAccountsToDelete
 */
class UpdateCaseRequest extends Request
{
    /**
     * @param array{
     *     caseId: string,
     *     title?: string,
     *     description?: string,
     *     reportedIncidentStartDate?: \Aws\Api\DateTimeResult,
     *     actualIncidentStartDate?: \Aws\Api\DateTimeResult,
     *     engagementType?: 'Security Incident'|'Investigation',
     *     watchersToAdd?: list<Shapes\Watcher>,
     *     watchersToDelete?: list<Shapes\Watcher>,
     *     threatActorIpAddressesToAdd?: list<Shapes\ThreatActorIp>,
     *     threatActorIpAddressesToDelete?: list<Shapes\ThreatActorIp>,
     *     impactedServicesToAdd?: list<string>,
     *     impactedServicesToDelete?: list<string>,
     *     impactedAwsRegionsToAdd?: list<Shapes\ImpactedAwsRegion>,
     *     impactedAwsRegionsToDelete?: list<Shapes\ImpactedAwsRegion>,
     *     impactedAccountsToAdd?: list<string>,
     *     impactedAccountsToDelete?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
