<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ConfirmForgotPassword\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IpAddress
 * @property string $EncodedData
 */
class UserContextDataType extends Shape
{
    /**
     * @param array{
     *     IpAddress?: string,
     *     EncodedData?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
