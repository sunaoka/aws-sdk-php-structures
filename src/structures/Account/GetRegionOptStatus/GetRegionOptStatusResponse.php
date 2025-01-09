<?php

namespace Sunaoka\Aws\Structures\Account\GetRegionOptStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $RegionName
 * @property 'ENABLED'|'ENABLING'|'DISABLING'|'DISABLED'|'ENABLED_BY_DEFAULT' $RegionOptStatus
 */
class GetRegionOptStatusResponse extends Response
{
}
