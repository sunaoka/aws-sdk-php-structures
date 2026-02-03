<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DescribeRegion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $RegionName
 * @property 'ACTIVE'|'ADDING'|'REMOVING'|null $Status
 * @property \Aws\Api\DateTimeResult|null $AddedDate
 * @property bool|null $IsPrimaryRegion
 */
class DescribeRegionResponse extends Response
{
}
