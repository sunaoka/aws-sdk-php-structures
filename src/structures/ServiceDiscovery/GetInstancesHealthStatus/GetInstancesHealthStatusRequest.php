<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\GetInstancesHealthStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceId
 * @property list<string> $Instances
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class GetInstancesHealthStatusRequest extends Request
{
    /**
     * @param array{
     *     ServiceId: string,
     *     Instances?: list<string>,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
