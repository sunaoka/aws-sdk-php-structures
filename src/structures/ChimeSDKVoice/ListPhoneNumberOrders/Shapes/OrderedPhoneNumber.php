<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\ListPhoneNumberOrders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $E164PhoneNumber
 * @property 'Processing'|'Acquired'|'Failed'|null $Status
 */
class OrderedPhoneNumber extends Shape
{
    /**
     * @param array{
     *     E164PhoneNumber?: string|null,
     *     Status?: 'Processing'|'Acquired'|'Failed'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
