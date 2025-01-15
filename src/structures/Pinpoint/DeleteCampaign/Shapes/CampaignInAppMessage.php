<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Body
 * @property list<InAppMessageContent>|null $Content
 * @property array<string, string>|null $CustomConfig
 * @property 'BOTTOM_BANNER'|'TOP_BANNER'|'OVERLAYS'|'MOBILE_FEED'|'MIDDLE_BANNER'|'CAROUSEL'|null $Layout
 */
class CampaignInAppMessage extends Shape
{
    /**
     * @param array{
     *     Body?: string|null,
     *     Content?: list<InAppMessageContent>|null,
     *     CustomConfig?: array<string, string>|null,
     *     Layout?: 'BOTTOM_BANNER'|'TOP_BANNER'|'OVERLAYS'|'MOBILE_FEED'|'MIDDLE_BANNER'|'CAROUSEL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
