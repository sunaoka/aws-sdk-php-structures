<?php

namespace Sunaoka\Aws\Structures\Route53\ListTrafficPolicyVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string|null $TrafficPolicyVersionMarker
 * @property string|null $MaxItems
 */
class ListTrafficPolicyVersionsRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     TrafficPolicyVersionMarker?: string|null,
     *     MaxItems?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
