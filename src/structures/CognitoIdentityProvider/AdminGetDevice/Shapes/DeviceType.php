<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminGetDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeviceKey
 * @property list<AttributeType> $DeviceAttributes
 * @property \Aws\Api\DateTimeResult $DeviceCreateDate
 * @property \Aws\Api\DateTimeResult $DeviceLastModifiedDate
 * @property \Aws\Api\DateTimeResult $DeviceLastAuthenticatedDate
 */
class DeviceType extends Shape
{
    /**
     * @param array{
     *     DeviceKey?: string,
     *     DeviceAttributes?: list<AttributeType>,
     *     DeviceCreateDate?: \Aws\Api\DateTimeResult,
     *     DeviceLastModifiedDate?: \Aws\Api\DateTimeResult,
     *     DeviceLastAuthenticatedDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
