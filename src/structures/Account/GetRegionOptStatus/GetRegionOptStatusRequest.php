<?php

namespace Sunaoka\Aws\Structures\Account\GetRegionOptStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $RegionName
 */
class GetRegionOptStatusRequest extends Request
{
    /**
     * @param array{
     *     AccountId?: string,
     *     RegionName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
