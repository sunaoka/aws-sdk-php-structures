<?php

namespace Sunaoka\Aws\Structures\B2bi\ListTransformers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $input
 * @property string|null $output
 */
class SampleDocumentKeys extends Shape
{
    /**
     * @param array{
     *     input?: string|null,
     *     output?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
