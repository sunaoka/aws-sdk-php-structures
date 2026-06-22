<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\GetMicrovmImageVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $uri
 */
class CodeArtifact extends Shape
{
    /**
     * @param array{uri?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
