<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetSites;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property list<string> $SiteIds
 * @property int $MaxResults
 * @property string $NextToken
 */
class GetSitesRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     SiteIds?: list<string>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
