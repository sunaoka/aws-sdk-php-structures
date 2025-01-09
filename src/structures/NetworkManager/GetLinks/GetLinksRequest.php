<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetLinks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property list<string> $LinkIds
 * @property string $SiteId
 * @property string $Type
 * @property string $Provider
 * @property int $MaxResults
 * @property string $NextToken
 */
class GetLinksRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     LinkIds?: list<string>,
     *     SiteId?: string,
     *     Type?: string,
     *     Provider?: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
