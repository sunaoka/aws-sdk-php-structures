<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GetDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DeviceKey
 * @property list<AttributeType>|null $DeviceAttributes
 * @property \Aws\Api\DateTimeResult|null $DeviceCreateDate
 * @property \Aws\Api\DateTimeResult|null $DeviceLastModifiedDate
 * @property \Aws\Api\DateTimeResult|null $DeviceLastAuthenticatedDate
 */
class DeviceType extends Shape
{
    /**
     * @param array{
     *     DeviceKey?: string|null,
     *     DeviceAttributes?: list<AttributeType>|null,
     *     DeviceCreateDate?: \Aws\Api\DateTimeResult|null,
     *     DeviceLastModifiedDate?: \Aws\Api\DateTimeResult|null,
     *     DeviceLastAuthenticatedDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
