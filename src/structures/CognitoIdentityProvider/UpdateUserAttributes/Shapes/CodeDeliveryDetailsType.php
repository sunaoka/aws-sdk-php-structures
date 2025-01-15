<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\UpdateUserAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Destination
 * @property 'SMS'|'EMAIL'|null $DeliveryMedium
 * @property string|null $AttributeName
 */
class CodeDeliveryDetailsType extends Shape
{
    /**
     * @param array{
     *     Destination?: string|null,
     *     DeliveryMedium?: 'SMS'|'EMAIL'|null,
     *     AttributeName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
