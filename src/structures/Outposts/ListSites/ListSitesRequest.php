<?php

namespace Sunaoka\Aws\Structures\Outposts\ListSites;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 * @property list<string>|null $OperatingAddressCountryCodeFilter
 * @property list<string>|null $OperatingAddressStateOrRegionFilter
 * @property list<string>|null $OperatingAddressCityFilter
 */
class ListSitesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     OperatingAddressCountryCodeFilter?: list<string>|null,
     *     OperatingAddressStateOrRegionFilter?: list<string>|null,
     *     OperatingAddressCityFilter?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
