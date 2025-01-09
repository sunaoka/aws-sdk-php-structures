<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\DescribeCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $connectSourceEmailAddress
 * @property string $sourceEmailAddressDisplayName
 * @property string $wisdomTemplateArn
 */
class EmailOutboundConfig extends Shape
{
    /**
     * @param array{
     *     connectSourceEmailAddress: string,
     *     sourceEmailAddressDisplayName?: string,
     *     wisdomTemplateArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
