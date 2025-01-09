<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetServiceNetwork;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property 'NONE'|'AWS_IAM' $authType
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $id
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property string $name
 * @property int $numberOfAssociatedServices
 * @property int $numberOfAssociatedVPCs
 * @property Shapes\SharingConfig $sharingConfig
 */
class GetServiceNetworkResponse extends Response
{
}
