<?php

namespace Sunaoka\Aws\Structures\Outposts\ListSites;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<1, 1000> $MaxResults
 * @property list<string> $OperatingAddressCountryCodeFilter
 * @property list<string> $OperatingAddressStateOrRegionFilter
 * @property list<string> $OperatingAddressCityFilter
 */
class ListSitesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<1, 1000>,
     *     OperatingAddressCountryCodeFilter?: list<string>,
     *     OperatingAddressStateOrRegionFilter?: list<string>,
     *     OperatingAddressCityFilter?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
