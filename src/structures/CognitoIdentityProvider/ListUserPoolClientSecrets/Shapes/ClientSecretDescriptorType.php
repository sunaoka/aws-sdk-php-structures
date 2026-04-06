<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListUserPoolClientSecrets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClientSecretId
 * @property string|null $ClientSecretValue
 * @property \Aws\Api\DateTimeResult|null $ClientSecretCreateDate
 */
class ClientSecretDescriptorType extends Shape
{
    /**
     * @param array{
     *     ClientSecretId?: string|null,
     *     ClientSecretValue?: string|null,
     *     ClientSecretCreateDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
