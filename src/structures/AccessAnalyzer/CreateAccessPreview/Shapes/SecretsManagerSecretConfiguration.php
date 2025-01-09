<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\CreateAccessPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $kmsKeyId
 * @property string $secretPolicy
 */
class SecretsManagerSecretConfiguration extends Shape
{
    /**
     * @param array{
     *     kmsKeyId?: string,
     *     secretPolicy?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
