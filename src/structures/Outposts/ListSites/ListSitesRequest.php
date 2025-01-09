<?php

namespace Sunaoka\Aws\Structures\Outposts\ListSites;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $MaxResults
 * @property list<string> $OperatingAddressCountryCodeFilter
 * @property list<string> $OperatingAddressStateOrRegionFilter
 * @property list<string> $OperatingAddressCityFilter
 */
class ListSitesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int,
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
