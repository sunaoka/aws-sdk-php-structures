<?php

namespace Sunaoka\Aws\Structures\Route53\ListHostedZonesByName;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DNSName
 * @property string|null $HostedZoneId
 * @property string|null $MaxItems
 */
class ListHostedZonesByNameRequest extends Request
{
    /**
     * @param array{
     *     DNSName?: string|null,
     *     HostedZoneId?: string|null,
     *     MaxItems?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
