<?php

namespace Sunaoka\Aws\Structures\SecurityIR\CreateCase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property 'AWS'|'Self' $resolverType
 * @property string $title
 * @property string $description
 * @property 'Security Incident'|'Investigation' $engagementType
 * @property \Aws\Api\DateTimeResult $reportedIncidentStartDate
 * @property list<string> $impactedAccounts
 * @property list<Shapes\Watcher> $watchers
 * @property list<Shapes\ThreatActorIp> $threatActorIpAddresses
 * @property list<string> $impactedServices
 * @property list<Shapes\ImpactedAwsRegion> $impactedAwsRegions
 * @property array<string, string> $tags
 */
class CreateCaseRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     resolverType: 'AWS'|'Self',
     *     title: string,
     *     description: string,
     *     engagementType: 'Security Incident'|'Investigation',
     *     reportedIncidentStartDate: \Aws\Api\DateTimeResult,
     *     impactedAccounts: list<string>,
     *     watchers: list<Shapes\Watcher>,
     *     threatActorIpAddresses?: list<Shapes\ThreatActorIp>,
     *     impactedServices?: list<string>,
     *     impactedAwsRegions?: list<Shapes\ImpactedAwsRegion>,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
