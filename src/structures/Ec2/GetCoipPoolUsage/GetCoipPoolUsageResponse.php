<?php

namespace Sunaoka\Aws\Structures\Ec2\GetCoipPoolUsage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $CoipPoolId
 * @property list<Shapes\CoipAddressUsage> $CoipAddressUsages
 * @property string $LocalGatewayRouteTableId
 * @property string $NextToken
 */
class GetCoipPoolUsageResponse extends Response
{
}
