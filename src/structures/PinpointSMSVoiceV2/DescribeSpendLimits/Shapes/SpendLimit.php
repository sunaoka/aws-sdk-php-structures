<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeSpendLimits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TEXT_MESSAGE_MONTHLY_SPEND_LIMIT'|'VOICE_MESSAGE_MONTHLY_SPEND_LIMIT'|'MEDIA_MESSAGE_MONTHLY_SPEND_LIMIT' $Name
 * @property int $EnforcedLimit
 * @property int $MaxLimit
 * @property bool $Overridden
 */
class SpendLimit extends Shape
{
    /**
     * @param array{
     *     Name: 'TEXT_MESSAGE_MONTHLY_SPEND_LIMIT'|'VOICE_MESSAGE_MONTHLY_SPEND_LIMIT'|'MEDIA_MESSAGE_MONTHLY_SPEND_LIMIT',
     *     EnforcedLimit: int,
     *     MaxLimit: int,
     *     Overridden: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
