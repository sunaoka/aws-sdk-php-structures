<?php

namespace Sunaoka\Aws\Structures\Outposts\UpdateSiteAddress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SiteId
 * @property 'SHIPPING_ADDRESS'|'OPERATING_ADDRESS' $AddressType
 * @property Shapes\Address $Address
 */
class UpdateSiteAddressRequest extends Request
{
    /**
     * @param array{
     *     SiteId: string,
     *     AddressType: 'SHIPPING_ADDRESS'|'OPERATING_ADDRESS',
     *     Address: Shapes\Address
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
