<?php

namespace Sunaoka\Aws\Structures\Chime\GetVoiceConnectorTermination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $CpsLimit
 * @property string|null $DefaultPhoneNumber
 * @property list<string>|null $CallingRegions
 * @property list<string>|null $CidrAllowedList
 * @property bool|null $Disabled
 */
class Termination extends Shape
{
    /**
     * @param array{
     *     CpsLimit?: int<1, max>|null,
     *     DefaultPhoneNumber?: string|null,
     *     CallingRegions?: list<string>|null,
     *     CidrAllowedList?: list<string>|null,
     *     Disabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
