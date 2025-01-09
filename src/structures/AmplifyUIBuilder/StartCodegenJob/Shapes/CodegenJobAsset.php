<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\StartCodegenJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $downloadUrl
 */
class CodegenJobAsset extends Shape
{
    /**
     * @param array{downloadUrl?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
