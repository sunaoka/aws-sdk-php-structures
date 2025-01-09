<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetCampaignVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OverrideButtonConfiguration $Android
 * @property DefaultButtonConfiguration $DefaultConfig
 * @property OverrideButtonConfiguration $IOS
 * @property OverrideButtonConfiguration $Web
 */
class InAppMessageButton extends Shape
{
    /**
     * @param array{
     *     Android?: OverrideButtonConfiguration,
     *     DefaultConfig?: DefaultButtonConfiguration,
     *     IOS?: OverrideButtonConfiguration,
     *     Web?: OverrideButtonConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
