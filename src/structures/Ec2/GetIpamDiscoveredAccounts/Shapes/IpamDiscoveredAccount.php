<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamDiscoveredAccounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property string $DiscoveryRegion
 * @property IpamDiscoveryFailureReason $FailureReason
 * @property \Aws\Api\DateTimeResult $LastAttemptedDiscoveryTime
 * @property \Aws\Api\DateTimeResult $LastSuccessfulDiscoveryTime
 * @property string $OrganizationalUnitId
 */
class IpamDiscoveredAccount extends Shape
{
    /**
     * @param array{
     *     AccountId?: string,
     *     DiscoveryRegion?: string,
     *     FailureReason?: IpamDiscoveryFailureReason,
     *     LastAttemptedDiscoveryTime?: \Aws\Api\DateTimeResult,
     *     LastSuccessfulDiscoveryTime?: \Aws\Api\DateTimeResult,
     *     OrganizationalUnitId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
