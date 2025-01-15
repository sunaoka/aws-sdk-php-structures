<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetCampaignVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BackgroundColor
 * @property InAppMessageBodyConfig|null $BodyConfig
 * @property InAppMessageHeaderConfig|null $HeaderConfig
 * @property string|null $ImageUrl
 * @property InAppMessageButton|null $PrimaryBtn
 * @property InAppMessageButton|null $SecondaryBtn
 */
class InAppMessageContent extends Shape
{
    /**
     * @param array{
     *     BackgroundColor?: string|null,
     *     BodyConfig?: InAppMessageBodyConfig|null,
     *     HeaderConfig?: InAppMessageHeaderConfig|null,
     *     ImageUrl?: string|null,
     *     PrimaryBtn?: InAppMessageButton|null,
     *     SecondaryBtn?: InAppMessageButton|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
