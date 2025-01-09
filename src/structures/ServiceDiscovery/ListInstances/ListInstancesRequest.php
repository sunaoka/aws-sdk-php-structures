<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\ListInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceId
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListInstancesRequest extends Request
{
    /**
     * @param array{
     *     ServiceId: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
