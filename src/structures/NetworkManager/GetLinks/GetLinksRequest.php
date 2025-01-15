<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetLinks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property list<string>|null $LinkIds
 * @property string|null $SiteId
 * @property string|null $Type
 * @property string|null $Provider
 * @property int<1, 500>|null $MaxResults
 * @property string|null $NextToken
 */
class GetLinksRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     LinkIds?: list<string>|null,
     *     SiteId?: string|null,
     *     Type?: string|null,
     *     Provider?: string|null,
     *     MaxResults?: int<1, 500>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
