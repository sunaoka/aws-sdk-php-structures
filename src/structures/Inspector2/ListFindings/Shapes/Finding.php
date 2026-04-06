<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $findingArn
 * @property string $awsAccountId
 * @property 'NETWORK_REACHABILITY'|'PACKAGE_VULNERABILITY'|'CODE_VULNERABILITY' $type
 * @property string $description
 * @property string|null $title
 * @property Remediation $remediation
 * @property 'INFORMATIONAL'|'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'|'UNTRIAGED' $severity
 * @property \Aws\Api\DateTimeResult $firstObservedAt
 * @property \Aws\Api\DateTimeResult $lastObservedAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property 'ACTIVE'|'SUPPRESSED'|'CLOSED' $status
 * @property list<ResourceShape> $resources
 * @property double|null $inspectorScore
 * @property InspectorScoreDetails|null $inspectorScoreDetails
 * @property NetworkReachabilityDetails|null $networkReachabilityDetails
 * @property PackageVulnerabilityDetails|null $packageVulnerabilityDetails
 * @property 'YES'|'NO'|'PARTIAL'|null $fixAvailable
 * @property 'YES'|'NO'|null $exploitAvailable
 * @property ExploitabilityDetails|null $exploitabilityDetails
 * @property CodeVulnerabilityDetails|null $codeVulnerabilityDetails
 * @property EpssDetails|null $epss
 */
class Finding extends Shape
{
    /**
     * @param array{
     *     findingArn: string,
     *     awsAccountId: string,
     *     type: 'NETWORK_REACHABILITY'|'PACKAGE_VULNERABILITY'|'CODE_VULNERABILITY',
     *     description: string,
     *     title?: string|null,
     *     remediation: Remediation,
     *     severity: 'INFORMATIONAL'|'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'|'UNTRIAGED',
     *     firstObservedAt: \Aws\Api\DateTimeResult,
     *     lastObservedAt: \Aws\Api\DateTimeResult,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     status: 'ACTIVE'|'SUPPRESSED'|'CLOSED',
     *     resources: list<ResourceShape>,
     *     inspectorScore?: double|null,
     *     inspectorScoreDetails?: InspectorScoreDetails|null,
     *     networkReachabilityDetails?: NetworkReachabilityDetails|null,
     *     packageVulnerabilityDetails?: PackageVulnerabilityDetails|null,
     *     fixAvailable?: 'YES'|'NO'|'PARTIAL'|null,
     *     exploitAvailable?: 'YES'|'NO'|null,
     *     exploitabilityDetails?: ExploitabilityDetails|null,
     *     codeVulnerabilityDetails?: CodeVulnerabilityDetails|null,
     *     epss?: EpssDetails|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
