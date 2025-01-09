<?php

namespace Sunaoka\Aws\Structures\MediaTailor\UpdateSourceLocation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HeaderName
 * @property string $SecretArn
 * @property string $SecretStringKey
 */
class SecretsManagerAccessTokenConfiguration extends Shape
{
    /**
     * @param array{
     *     HeaderName?: string,
     *     SecretArn?: string,
     *     SecretStringKey?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
