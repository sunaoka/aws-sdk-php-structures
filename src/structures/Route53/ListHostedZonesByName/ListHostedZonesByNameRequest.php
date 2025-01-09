<?php

namespace Sunaoka\Aws\Structures\Route53\ListHostedZonesByName;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DNSName
 * @property string $HostedZoneId
 * @property string $MaxItems
 */
class ListHostedZonesByNameRequest extends Request
{
    /**
     * @param array{
     *     DNSName?: string,
     *     HostedZoneId?: string,
     *     MaxItems?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
