<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetSiteToSiteVpnAttachment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Attachment $Attachment
 * @property string $VpnConnectionArn
 */
class SiteToSiteVpnAttachment extends Shape
{
    /**
     * @param array{
     *     Attachment?: Attachment,
     *     VpnConnectionArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
