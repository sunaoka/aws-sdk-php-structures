<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetCampaignVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Body
 * @property list<InAppMessageContent> $Content
 * @property array<string, string> $CustomConfig
 * @property 'BOTTOM_BANNER'|'TOP_BANNER'|'OVERLAYS'|'MOBILE_FEED'|'MIDDLE_BANNER'|'CAROUSEL' $Layout
 */
class CampaignInAppMessage extends Shape
{
    /**
     * @param array{
     *     Body?: string,
     *     Content?: list<InAppMessageContent>,
     *     CustomConfig?: array<string, string>,
     *     Layout?: 'BOTTOM_BANNER'|'TOP_BANNER'|'OVERLAYS'|'MOBILE_FEED'|'MIDDLE_BANNER'|'CAROUSEL'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
