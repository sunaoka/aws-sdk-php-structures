<?php

namespace Sunaoka\Aws\Structures\Account\GetRegionOptStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $RegionName
 * @property 'ENABLED'|'ENABLING'|'DISABLING'|'DISABLED'|'ENABLED_BY_DEFAULT'|null $RegionOptStatus
 */
class GetRegionOptStatusResponse extends Response
{
}
