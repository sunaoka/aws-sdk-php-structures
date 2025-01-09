<?php

namespace Sunaoka\Aws\Structures\Sts\AssumeRole\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProviderArn
 * @property string $ContextAssertion
 */
class ProvidedContext extends Shape
{
    /**
     * @param array{
     *     ProviderArn?: string,
     *     ContextAssertion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
