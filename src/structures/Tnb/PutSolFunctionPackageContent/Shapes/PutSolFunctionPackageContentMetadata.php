<?php

namespace Sunaoka\Aws\Structures\Tnb\PutSolFunctionPackageContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FunctionArtifactMeta|null $vnfd
 */
class PutSolFunctionPackageContentMetadata extends Shape
{
    /**
     * @param array{vnfd?: FunctionArtifactMeta|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
