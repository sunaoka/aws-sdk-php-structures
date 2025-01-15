<?php

namespace Sunaoka\Aws\Structures\Outposts\GetSiteAddress;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $SiteId
 * @property 'SHIPPING_ADDRESS'|'OPERATING_ADDRESS'|null $AddressType
 * @property Shapes\Address|null $Address
 */
class GetSiteAddressResponse extends Response
{
}
