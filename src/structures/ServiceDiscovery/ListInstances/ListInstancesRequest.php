<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\ListInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListInstancesRequest extends Request
{
    /**
     * @param array{
     *     ServiceId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
