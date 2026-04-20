<?php

namespace Sunaoka\Aws\Structures\Evs\ListVmEntitlements;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 * @property string $environmentId
 * @property string $connectorId
 * @property 'WINDOWS_SERVER' $entitlementType
 */
class ListVmEntitlementsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     environmentId: string,
     *     connectorId: string,
     *     entitlementType: 'WINDOWS_SERVER'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
