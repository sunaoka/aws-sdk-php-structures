<?php

namespace Sunaoka\Aws\Structures\Tnb\ValidateSolFunctionPackageContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FunctionArtifactMeta $vnfd
 */
class ValidateSolFunctionPackageContentMetadata extends Shape
{
    /**
     * @param array{vnfd?: FunctionArtifactMeta} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
