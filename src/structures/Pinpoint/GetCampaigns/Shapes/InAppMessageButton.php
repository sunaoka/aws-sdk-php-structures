<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetCampaigns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OverrideButtonConfiguration|null $Android
 * @property DefaultButtonConfiguration|null $DefaultConfig
 * @property OverrideButtonConfiguration|null $IOS
 * @property OverrideButtonConfiguration|null $Web
 */
class InAppMessageButton extends Shape
{
    /**
     * @param array{
     *     Android?: OverrideButtonConfiguration|null,
     *     DefaultConfig?: DefaultButtonConfiguration|null,
     *     IOS?: OverrideButtonConfiguration|null,
     *     Web?: OverrideButtonConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
