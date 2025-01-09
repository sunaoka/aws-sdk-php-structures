<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property string $BannerText
 */
class AwsEc2ClientVpnEndpointClientLoginBannerOptionsDetails extends Shape
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
