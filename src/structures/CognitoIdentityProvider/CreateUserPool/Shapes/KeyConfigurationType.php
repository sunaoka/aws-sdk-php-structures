<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateUserPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AWS_OWNED_KEY'|'CUSTOMER_MANAGED_KEY'|null $KeyType
 * @property string|null $KmsKeyArn
 */
class KeyConfigurationType extends Shape
{
    /**
     * @param array{
     *     KeyType?: 'AWS_OWNED_KEY'|'CUSTOMER_MANAGED_KEY'|null,
     *     KmsKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
