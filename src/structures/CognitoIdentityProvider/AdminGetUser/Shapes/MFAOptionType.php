<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminGetUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SMS'|'EMAIL'|null $DeliveryMedium
 * @property string|null $AttributeName
 */
class MFAOptionType extends Shape
{
    /**
     * @param array{
     *     DeliveryMedium?: 'SMS'|'EMAIL'|null,
     *     AttributeName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
