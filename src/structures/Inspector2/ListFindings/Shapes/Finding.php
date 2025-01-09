<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $awsAccountId
 * @property CodeVulnerabilityDetails $codeVulnerabilityDetails
 * @property string $description
 * @property EpssDetails $epss
 * @property 'YES'|'NO' $exploitAvailable
 * @property ExploitabilityDetails $exploitabilityDetails
 * @property string $findingArn
 * @property \Aws\Api\DateTimeResult $firstObservedAt
 * @property 'YES'|'NO'|'PARTIAL' $fixAvailable
 * @property double $inspectorScore
 * @property InspectorScoreDetails $inspectorScoreDetails
 * @property \Aws\Api\DateTimeResult $lastObservedAt
 * @property NetworkReachabilityDetails $networkReachabilityDetails
 * @property PackageVulnerabilityDetails $packageVulnerabilityDetails
 * @property Remediation $remediation
 * @property list<Resource> $resources
 * @property 'INFORMATIONAL'|'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'|'UNTRIAGED' $severity
 * @property 'ACTIVE'|'SUPPRESSED'|'CLOSED' $status
 * @property string $title
 * @property 'NETWORK_REACHABILITY'|'PACKAGE_VULNERABILITY'|'CODE_VULNERABILITY' $type
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class Finding extends Shape
{
    /**
     * @param array{
     *     awsAccountId: string,
     *     codeVulnerabilityDetails?: CodeVulnerabilityDetails,
     *     description: string,
     *     epss?: EpssDetails,
     *     exploitAvailable?: 'YES'|'NO',
     *     exploitabilityDetails?: ExploitabilityDetails,
     *     findingArn: string,
     *     firstObservedAt: \Aws\Api\DateTimeResult,
     *     fixAvailable?: 'YES'|'NO'|'PARTIAL',
     *     inspectorScore?: double,
     *     inspectorScoreDetails?: InspectorScoreDetails,
     *     lastObservedAt: \Aws\Api\DateTimeResult,
     *     networkReachabilityDetails?: NetworkReachabilityDetails,
     *     packageVulnerabilityDetails?: PackageVulnerabilityDetails,
     *     remediation: Remediation,
     *     resources: list<Resource>,
     *     severity: 'INFORMATIONAL'|'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'|'UNTRIAGED',
     *     status: 'ACTIVE'|'SUPPRESSED'|'CLOSED',
     *     title?: string,
     *     type: 'NETWORK_REACHABILITY'|'PACKAGE_VULNERABILITY'|'CODE_VULNERABILITY',
     *     updatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
