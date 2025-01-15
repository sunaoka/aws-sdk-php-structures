<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ConfirmForgotPassword\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IpAddress
 * @property string|null $EncodedData
 */
class UserContextDataType extends Shape
{
    /**
     * @param array{
     *     IpAddress?: string|null,
     *     EncodedData?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
