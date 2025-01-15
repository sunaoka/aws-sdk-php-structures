<?php

namespace Sunaoka\Aws\Structures\Account\ListRegions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AccountId
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 * @property list<'ENABLED'|'ENABLING'|'DISABLING'|'DISABLED'|'ENABLED_BY_DEFAULT'>|null $RegionOptStatusContains
 */
class ListRegionsRequest extends Request
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null,
     *     RegionOptStatusContains?: list<'ENABLED'|'ENABLING'|'DISABLING'|'DISABLED'|'ENABLED_BY_DEFAULT'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
