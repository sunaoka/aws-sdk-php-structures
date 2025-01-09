<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\ListInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceId
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class ListInstancesRequest extends Request
{
    /**
     * @param array{
     *     ServiceId: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
