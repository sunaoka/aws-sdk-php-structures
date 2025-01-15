<?php

namespace Sunaoka\Aws\Structures\Account\DisableRegion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AccountId
 * @property string $RegionName
 */
class DisableRegionRequest extends Request
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     RegionName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
