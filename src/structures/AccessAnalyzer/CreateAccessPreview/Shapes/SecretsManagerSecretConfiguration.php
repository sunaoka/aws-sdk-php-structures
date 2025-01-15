<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\CreateAccessPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $kmsKeyId
 * @property string|null $secretPolicy
 */
class SecretsManagerSecretConfiguration extends Shape
{
    /**
     * @param array{
     *     kmsKeyId?: string|null,
     *     secretPolicy?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
