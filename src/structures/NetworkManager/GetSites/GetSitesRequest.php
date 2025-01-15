<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetSites;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property list<string>|null $SiteIds
 * @property int<1, 500>|null $MaxResults
 * @property string|null $NextToken
 */
class GetSitesRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     SiteIds?: list<string>|null,
     *     MaxResults?: int<1, 500>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
