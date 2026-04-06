<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\GetConferenceProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CountryCode
 * @property string $PhoneNumber
 * @property string $OneClickIdDelay
 * @property string $OneClickPinDelay
 */
class PSTNDialIn extends Shape
{
    /**
     * @param array{
     *     CountryCode: string,
     *     PhoneNumber: string,
     *     OneClickIdDelay: string,
     *     OneClickPinDelay: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
