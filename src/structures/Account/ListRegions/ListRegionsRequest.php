<?php

namespace Sunaoka\Aws\Structures\Account\ListRegions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property int $MaxResults
 * @property string $NextToken
 * @property list<'ENABLED'|'ENABLING'|'DISABLING'|'DISABLED'|'ENABLED_BY_DEFAULT'> $RegionOptStatusContains
 */
class ListRegionsRequest extends Request
{
    /**
     * @param array{
     *     AccountId?: string,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     RegionOptStatusContains?: list<'ENABLED'|'ENABLING'|'DISABLING'|'DISABLED'|'ENABLED_BY_DEFAULT'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
