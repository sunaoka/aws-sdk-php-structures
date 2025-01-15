<?php

namespace Sunaoka\Aws\Structures\Ec2\GetCoipPoolUsage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $CoipPoolId
 * @property list<Shapes\CoipAddressUsage>|null $CoipAddressUsages
 * @property string|null $LocalGatewayRouteTableId
 * @property string|null $NextToken
 */
class GetCoipPoolUsageResponse extends Response
{
}
