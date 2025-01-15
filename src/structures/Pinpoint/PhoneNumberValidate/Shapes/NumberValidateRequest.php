<?php

namespace Sunaoka\Aws\Structures\Pinpoint\PhoneNumberValidate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IsoCountryCode
 * @property string|null $PhoneNumber
 */
class NumberValidateRequest extends Shape
{
    /**
     * @param array{
     *     IsoCountryCode?: string|null,
     *     PhoneNumber?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
