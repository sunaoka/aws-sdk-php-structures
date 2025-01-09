<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListUsersInGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SMS'|'EMAIL' $DeliveryMedium
 * @property string $AttributeName
 */
class MFAOptionType extends Shape
{
    /**
     * @param array{
     *     DeliveryMedium?: 'SMS'|'EMAIL',
     *     AttributeName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
