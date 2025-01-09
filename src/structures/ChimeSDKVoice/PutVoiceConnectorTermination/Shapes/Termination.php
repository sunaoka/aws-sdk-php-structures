<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\PutVoiceConnectorTermination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $CpsLimit
 * @property string $DefaultPhoneNumber
 * @property list<string> $CallingRegions
 * @property list<string> $CidrAllowedList
 * @property bool $Disabled
 */
class Termination extends Shape
{
    /**
     * @param array{
     *     CpsLimit?: int,
     *     DefaultPhoneNumber?: string,
     *     CallingRegions?: list<string>,
     *     CidrAllowedList?: list<string>,
     *     Disabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
