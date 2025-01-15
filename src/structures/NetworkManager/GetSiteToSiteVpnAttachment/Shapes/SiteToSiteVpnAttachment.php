<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetSiteToSiteVpnAttachment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Attachment|null $Attachment
 * @property string|null $VpnConnectionArn
 */
class SiteToSiteVpnAttachment extends Shape
{
    /**
     * @param array{
     *     Attachment?: Attachment|null,
     *     VpnConnectionArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
