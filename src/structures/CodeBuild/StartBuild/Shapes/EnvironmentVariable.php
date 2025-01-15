<?php

namespace Sunaoka\Aws\Structures\CodeBuild\StartBuild\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $value
 * @property 'PLAINTEXT'|'PARAMETER_STORE'|'SECRETS_MANAGER'|null $type
 */
class EnvironmentVariable extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     value: string,
     *     type?: 'PLAINTEXT'|'PARAMETER_STORE'|'SECRETS_MANAGER'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
