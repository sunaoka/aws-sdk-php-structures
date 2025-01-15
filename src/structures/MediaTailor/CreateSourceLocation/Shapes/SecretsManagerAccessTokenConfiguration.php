<?php

namespace Sunaoka\Aws\Structures\MediaTailor\CreateSourceLocation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $HeaderName
 * @property string|null $SecretArn
 * @property string|null $SecretStringKey
 */
class SecretsManagerAccessTokenConfiguration extends Shape
{
    /**
     * @param array{
     *     HeaderName?: string|null,
     *     SecretArn?: string|null,
     *     SecretStringKey?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
