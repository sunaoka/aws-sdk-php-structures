<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GetUserAttributeVerificationCode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Destination
 * @property 'SMS'|'EMAIL' $DeliveryMedium
 * @property string $AttributeName
 */
class CodeDeliveryDetailsType extends Shape
{
    /**
     * @param array{
     *     Destination?: string,
     *     DeliveryMedium?: 'SMS'|'EMAIL',
     *     AttributeName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
