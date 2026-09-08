<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribePhoneNumbers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, int>|null $RateLimits
 * @property array<string, int>|null $DailyMessageCaps
 */
class MessagingLimits extends Shape
{
    /**
     * @param array{
     *     RateLimits?: array<string, int>|null,
     *     DailyMessageCaps?: array<string, int>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
