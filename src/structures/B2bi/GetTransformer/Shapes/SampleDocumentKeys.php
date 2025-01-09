<?php

namespace Sunaoka\Aws\Structures\B2bi\GetTransformer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $input
 * @property string $output
 */
class SampleDocumentKeys extends Shape
{
    /**
     * @param array{
     *     input?: string,
     *     output?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
