<?php

namespace Sunaoka\Aws\Structures\SecretsManager\BatchGetSecretValue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SecretId
 * @property string|null $ErrorCode
 * @property string|null $Message
 */
class APIErrorType extends Shape
{
    /**
     * @param array{
     *     SecretId?: string|null,
     *     ErrorCode?: string|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
