<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamRoutingPolicyRegistrationDeltas;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $IpamInternetRegistryAssociationId
 * @property string|null $DeltaId
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property 'forward'|'reverse'|null $ChronologicalOrder
 * @property int<5, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class GetIpamRoutingPolicyRegistrationDeltasRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     IpamInternetRegistryAssociationId: string,
     *     DeltaId?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     ChronologicalOrder?: 'forward'|'reverse'|null,
     *     MaxResults?: int<5, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
