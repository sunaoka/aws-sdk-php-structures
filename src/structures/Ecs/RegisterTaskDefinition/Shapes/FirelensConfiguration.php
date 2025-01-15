<?php

namespace Sunaoka\Aws\Structures\Ecs\RegisterTaskDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'fluentd'|'fluentbit' $type
 * @property array<string, string>|null $options
 */
class FirelensConfiguration extends Shape
{
    /**
     * @param array{
     *     type: 'fluentd'|'fluentbit',
     *     options?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
