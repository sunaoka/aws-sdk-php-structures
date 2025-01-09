<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListTapePools;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $PoolARNs
 * @property string $Marker
 * @property int $Limit
 */
class ListTapePoolsRequest extends Request
{
    /**
     * @param array{
     *     PoolARNs?: list<string>,
     *     Marker?: string,
     *     Limit?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
