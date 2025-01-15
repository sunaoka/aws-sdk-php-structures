<?php

namespace Sunaoka\Aws\Structures\Sts\AssumeRole\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProviderArn
 * @property string|null $ContextAssertion
 */
class ProvidedContext extends Shape
{
    /**
     * @param array{
     *     ProviderArn?: string|null,
     *     ContextAssertion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
