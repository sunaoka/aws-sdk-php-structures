<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListTapePools;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $PoolARNs
 * @property string|null $Marker
 * @property int<1, max>|null $Limit
 */
class ListTapePoolsRequest extends Request
{
    /**
     * @param array{
     *     PoolARNs?: list<string>|null,
     *     Marker?: string|null,
     *     Limit?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
