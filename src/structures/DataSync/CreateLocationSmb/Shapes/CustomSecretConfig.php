<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateLocationSmb\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SecretArn
 * @property string|null $SecretAccessRoleArn
 */
class CustomSecretConfig extends Shape
{
    /**
     * @param array{
     *     SecretArn?: string|null,
     *     SecretAccessRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
