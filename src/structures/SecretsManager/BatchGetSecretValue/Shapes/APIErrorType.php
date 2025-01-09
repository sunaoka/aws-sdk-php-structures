<?php

namespace Sunaoka\Aws\Structures\SecretsManager\BatchGetSecretValue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SecretId
 * @property string $ErrorCode
 * @property string $Message
 */
class APIErrorType extends Shape
{
    /**
     * @param array{
     *     SecretId?: string,
     *     ErrorCode?: string,
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
