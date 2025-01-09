<?php

namespace Sunaoka\Aws\Structures\Proton\ListComponents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentName
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 * @property string $serviceInstanceName
 * @property string $serviceName
 */
class ListComponentsRequest extends Request
{
    /**
     * @param array{
     *     environmentName?: string,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string,
     *     serviceInstanceName?: string,
     *     serviceName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
