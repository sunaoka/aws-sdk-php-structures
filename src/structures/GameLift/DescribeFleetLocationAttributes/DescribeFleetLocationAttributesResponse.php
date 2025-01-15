<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeFleetLocationAttributes;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $FleetId
 * @property string|null $FleetArn
 * @property list<Shapes\LocationAttributes>|null $LocationAttributes
 * @property string|null $NextToken
 */
class DescribeFleetLocationAttributesResponse extends Response
{
}
