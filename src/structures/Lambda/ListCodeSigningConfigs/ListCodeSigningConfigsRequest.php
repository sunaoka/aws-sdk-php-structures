<?php

namespace Sunaoka\Aws\Structures\Lambda\ListCodeSigningConfigs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Marker
 * @property int<1, 10000>|null $MaxItems
 */
class ListCodeSigningConfigsRequest extends Request
{
    /**
     * @param array{
     *     Marker?: string|null,
     *     MaxItems?: int<1, 10000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
