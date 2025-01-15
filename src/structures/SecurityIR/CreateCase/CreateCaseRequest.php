<?php

namespace Sunaoka\Aws\Structures\SecurityIR\CreateCase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property 'AWS'|'Self' $resolverType
 * @property string $title
 * @property string $description
 * @property 'Security Incident'|'Investigation' $engagementType
 * @property \Aws\Api\DateTimeResult $reportedIncidentStartDate
 * @property list<string> $impactedAccounts
 * @property list<Shapes\Watcher> $watchers
 * @property list<Shapes\ThreatActorIp>|null $threatActorIpAddresses
 * @property list<string>|null $impactedServices
 * @property list<Shapes\ImpactedAwsRegion>|null $impactedAwsRegions
 * @property array<string, string>|null $tags
 */
class CreateCaseRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     resolverType: 'AWS'|'Self',
     *     title: string,
     *     description: string,
     *     engagementType: 'Security Incident'|'Investigation',
     *     reportedIncidentStartDate: \Aws\Api\DateTimeResult,
     *     impactedAccounts: list<string>,
     *     watchers: list<Shapes\Watcher>,
     *     threatActorIpAddresses?: list<Shapes\ThreatActorIp>|null,
     *     impactedServices?: list<string>|null,
     *     impactedAwsRegions?: list<Shapes\ImpactedAwsRegion>|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
