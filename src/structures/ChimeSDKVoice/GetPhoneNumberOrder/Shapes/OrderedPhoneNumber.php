<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\GetPhoneNumberOrder\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $E164PhoneNumber
 * @property 'Processing'|'Acquired'|'Failed' $Status
 */
class OrderedPhoneNumber extends Shape
{
    /**
     * @param array{
     *     E164PhoneNumber?: string,
     *     Status?: 'Processing'|'Acquired'|'Failed'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
