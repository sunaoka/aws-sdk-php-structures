<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetServiceNetwork;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property 'NONE'|'AWS_IAM'|null $authType
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $id
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property string|null $name
 * @property int|null $numberOfAssociatedServices
 * @property int|null $numberOfAssociatedVPCs
 * @property Shapes\SharingConfig|null $sharingConfig
 */
class GetServiceNetworkResponse extends Response
{
}
