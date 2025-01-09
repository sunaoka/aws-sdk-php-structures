<?php

namespace Sunaoka\Aws\Structures\Lambda\ListCodeSigningConfigs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Marker
 * @property int $MaxItems
 */
class ListCodeSigningConfigsRequest extends Request
{
    /**
     * @param array{
     *     Marker?: string,
     *     MaxItems?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
