<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeFleetLocationAttributes;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $FleetId
 * @property string $FleetArn
 * @property list<Shapes\LocationAttributes> $LocationAttributes
 * @property string $NextToken
 */
class DescribeFleetLocationAttributesResponse extends Response
{
}
