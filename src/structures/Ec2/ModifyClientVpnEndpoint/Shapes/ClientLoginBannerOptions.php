<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyClientVpnEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 * @property string|null $BannerText
 */
class ClientLoginBannerOptions extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool|null,
     *     BannerText?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
