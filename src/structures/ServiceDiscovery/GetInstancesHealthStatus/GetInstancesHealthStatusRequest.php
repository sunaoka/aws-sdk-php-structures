<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\GetInstancesHealthStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceId
 * @property list<string>|null $Instances
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class GetInstancesHealthStatusRequest extends Request
{
    /**
     * @param array{
     *     ServiceId: string,
     *     Instances?: list<string>|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
