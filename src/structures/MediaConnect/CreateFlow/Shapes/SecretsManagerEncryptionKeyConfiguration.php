<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SecretArn
 * @property string $RoleArn
 */
class SecretsManagerEncryptionKeyConfiguration extends Shape
{
    /**
     * @param array{
     *     SecretArn: string,
     *     RoleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
