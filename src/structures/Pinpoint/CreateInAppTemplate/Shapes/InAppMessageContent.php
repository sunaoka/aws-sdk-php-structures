<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreateInAppTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BackgroundColor
 * @property InAppMessageBodyConfig $BodyConfig
 * @property InAppMessageHeaderConfig $HeaderConfig
 * @property string $ImageUrl
 * @property InAppMessageButton $PrimaryBtn
 * @property InAppMessageButton $SecondaryBtn
 */
class InAppMessageContent extends Shape
{
    /**
     * @param array{
     *     BackgroundColor?: string,
     *     BodyConfig?: InAppMessageBodyConfig,
     *     HeaderConfig?: InAppMessageHeaderConfig,
     *     ImageUrl?: string,
     *     PrimaryBtn?: InAppMessageButton,
     *     SecondaryBtn?: InAppMessageButton
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
