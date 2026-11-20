<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\ListSocialConnections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AWS'|'Sandbox' $Catalog
 * @property 'FACEBOOK'|'LINKEDIN'|'X'|null $Platform
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListSocialConnectionsRequest extends Request
{
    /**
     * @param array{
     *     Catalog: 'AWS'|'Sandbox',
     *     Platform?: 'FACEBOOK'|'LINKEDIN'|'X'|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
