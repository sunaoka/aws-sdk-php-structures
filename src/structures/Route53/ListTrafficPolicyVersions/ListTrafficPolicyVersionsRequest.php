<?php

namespace Sunaoka\Aws\Structures\Route53\ListTrafficPolicyVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $TrafficPolicyVersionMarker
 * @property string $MaxItems
 */
class ListTrafficPolicyVersionsRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     TrafficPolicyVersionMarker?: string,
     *     MaxItems?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
