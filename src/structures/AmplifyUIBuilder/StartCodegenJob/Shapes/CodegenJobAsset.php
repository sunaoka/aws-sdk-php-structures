<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\StartCodegenJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $downloadUrl
 */
class CodegenJobAsset extends Shape
{
    /**
     * @param array{downloadUrl?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
