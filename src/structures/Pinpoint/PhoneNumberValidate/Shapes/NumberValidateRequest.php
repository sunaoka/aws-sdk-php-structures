<?php

namespace Sunaoka\Aws\Structures\Pinpoint\PhoneNumberValidate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IsoCountryCode
 * @property string $PhoneNumber
 */
class NumberValidateRequest extends Shape
{
    /**
     * @param array{
     *     IsoCountryCode?: string,
     *     PhoneNumber?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
