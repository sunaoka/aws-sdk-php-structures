<?php

namespace Sunaoka\Aws\Structures\Outposts\GetSiteAddress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SiteId
 * @property 'SHIPPING_ADDRESS'|'OPERATING_ADDRESS' $AddressType
 */
class GetSiteAddressRequest extends Request
{
    /**
     * @param array{
     *     SiteId: string,
     *     AddressType: 'SHIPPING_ADDRESS'|'OPERATING_ADDRESS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
