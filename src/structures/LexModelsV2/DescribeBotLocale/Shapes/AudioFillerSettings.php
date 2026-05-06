<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBotLocale\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $enabled
 * @property 'MELODY_CHIPPER_CHIME'|'MELODY_CURIOUS_CRAWL'|'MELODY_RISING_RIPPLE'|'MELODY_PATIENT_PING'|'MELODY_PONDERING_PONG'|'TYPING_KINETIC_KEYS'|'TYPING_QUIET_QWERTY'|null $audioType
 * @property int|null $startDelayInMilliseconds
 * @property int|null $minimumPlayDurationInMilliseconds
 * @property int|null $responseDeliveryDelayInMilliseconds
 */
class AudioFillerSettings extends Shape
{
    /**
     * @param array{
     *     enabled?: bool|null,
     *     audioType?: 'MELODY_CHIPPER_CHIME'|'MELODY_CURIOUS_CRAWL'|'MELODY_RISING_RIPPLE'|'MELODY_PATIENT_PING'|'MELODY_PONDERING_PONG'|'TYPING_KINETIC_KEYS'|'TYPING_QUIET_QWERTY'|null,
     *     startDelayInMilliseconds?: int|null,
     *     minimumPlayDurationInMilliseconds?: int|null,
     *     responseDeliveryDelayInMilliseconds?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
