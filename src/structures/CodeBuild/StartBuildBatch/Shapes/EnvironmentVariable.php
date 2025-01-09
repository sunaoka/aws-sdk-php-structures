<?php

namespace Sunaoka\Aws\Structures\CodeBuild\StartBuildBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $value
 * @property 'PLAINTEXT'|'PARAMETER_STORE'|'SECRETS_MANAGER' $type
 */
class EnvironmentVariable extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     value: string,
     *     type?: 'PLAINTEXT'|'PARAMETER_STORE'|'SECRETS_MANAGER'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
