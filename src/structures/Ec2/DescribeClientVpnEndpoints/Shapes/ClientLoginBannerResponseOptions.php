<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeClientVpnEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property string $BannerText
 */
class ClientLoginBannerResponseOptions extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool,
     *     BannerText?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
