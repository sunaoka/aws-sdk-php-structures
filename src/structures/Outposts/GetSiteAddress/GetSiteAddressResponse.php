<?php

namespace Sunaoka\Aws\Structures\Outposts\GetSiteAddress;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $SiteId
 * @property 'SHIPPING_ADDRESS'|'OPERATING_ADDRESS' $AddressType
 * @property Shapes\Address $Address
 */
class GetSiteAddressResponse extends Response
{
}
