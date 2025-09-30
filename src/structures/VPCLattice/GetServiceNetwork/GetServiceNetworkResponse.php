<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetServiceNetwork;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $id
 * @property string|null $name
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property string|null $arn
 * @property 'NONE'|'AWS_IAM'|null $authType
 * @property Shapes\SharingConfig|null $sharingConfig
 * @property int|null $numberOfAssociatedVPCs
 * @property int|null $numberOfAssociatedServices
 */
class GetServiceNetworkResponse extends Response
{
}
