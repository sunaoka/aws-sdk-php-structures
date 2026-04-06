<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\UpdateCampaignChannelSubtypeConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $connectSourceEmailAddress
 * @property string|null $sourceEmailAddressDisplayName
 * @property string $wisdomTemplateArn
 */
class EmailOutboundConfig extends Shape
{
    /**
     * @param array{
     *     connectSourceEmailAddress: string,
     *     sourceEmailAddressDisplayName?: string|null,
     *     wisdomTemplateArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
