<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\DescribeCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $connectSourcePhoneNumberArn
 * @property string $wisdomTemplateArn
 */
class WhatsAppOutboundConfig extends Shape
{
    /**
     * @param array{
     *     connectSourcePhoneNumberArn: string,
     *     wisdomTemplateArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
