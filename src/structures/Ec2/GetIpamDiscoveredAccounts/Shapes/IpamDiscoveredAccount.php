<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamDiscoveredAccounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountId
 * @property string|null $DiscoveryRegion
 * @property IpamDiscoveryFailureReason|null $FailureReason
 * @property \Aws\Api\DateTimeResult|null $LastAttemptedDiscoveryTime
 * @property \Aws\Api\DateTimeResult|null $LastSuccessfulDiscoveryTime
 * @property string|null $OrganizationalUnitId
 */
class IpamDiscoveredAccount extends Shape
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     DiscoveryRegion?: string|null,
     *     FailureReason?: IpamDiscoveryFailureReason|null,
     *     LastAttemptedDiscoveryTime?: \Aws\Api\DateTimeResult|null,
     *     LastSuccessfulDiscoveryTime?: \Aws\Api\DateTimeResult|null,
     *     OrganizationalUnitId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
