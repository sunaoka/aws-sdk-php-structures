<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $awsAccountId
 * @property CodeVulnerabilityDetails|null $codeVulnerabilityDetails
 * @property string $description
 * @property EpssDetails|null $epss
 * @property 'YES'|'NO'|null $exploitAvailable
 * @property ExploitabilityDetails|null $exploitabilityDetails
 * @property string $findingArn
 * @property \Aws\Api\DateTimeResult $firstObservedAt
 * @property 'YES'|'NO'|'PARTIAL'|null $fixAvailable
 * @property double|null $inspectorScore
 * @property InspectorScoreDetails|null $inspectorScoreDetails
 * @property \Aws\Api\DateTimeResult $lastObservedAt
 * @property NetworkReachabilityDetails|null $networkReachabilityDetails
 * @property PackageVulnerabilityDetails|null $packageVulnerabilityDetails
 * @property Remediation $remediation
 * @property list<ResourceShape> $resources
 * @property 'INFORMATIONAL'|'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'|'UNTRIAGED' $severity
 * @property 'ACTIVE'|'SUPPRESSED'|'CLOSED' $status
 * @property string|null $title
 * @property 'NETWORK_REACHABILITY'|'PACKAGE_VULNERABILITY'|'CODE_VULNERABILITY' $type
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class Finding extends Shape
{
    /**
     * @param array{
     *     awsAccountId: string,
     *     codeVulnerabilityDetails?: CodeVulnerabilityDetails|null,
     *     description: string,
     *     epss?: EpssDetails|null,
     *     exploitAvailable?: 'YES'|'NO'|null,
     *     exploitabilityDetails?: ExploitabilityDetails|null,
     *     findingArn: string,
     *     firstObservedAt: \Aws\Api\DateTimeResult,
     *     fixAvailable?: 'YES'|'NO'|'PARTIAL'|null,
     *     inspectorScore?: double|null,
     *     inspectorScoreDetails?: InspectorScoreDetails|null,
     *     lastObservedAt: \Aws\Api\DateTimeResult,
     *     networkReachabilityDetails?: NetworkReachabilityDetails|null,
     *     packageVulnerabilityDetails?: PackageVulnerabilityDetails|null,
     *     remediation: Remediation,
     *     resources: list<ResourceShape>,
     *     severity: 'INFORMATIONAL'|'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'|'UNTRIAGED',
     *     status: 'ACTIVE'|'SUPPRESSED'|'CLOSED',
     *     title?: string|null,
     *     type: 'NETWORK_REACHABILITY'|'PACKAGE_VULNERABILITY'|'CODE_VULNERABILITY',
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
