<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListTapePools;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $PoolARNs
 * @property string $Marker
 * @property int<1, max> $Limit
 */
class ListTapePoolsRequest extends Request
{
    /**
     * @param array{
     *     PoolARNs?: list<string>,
     *     Marker?: string,
     *     Limit?: int<1, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
