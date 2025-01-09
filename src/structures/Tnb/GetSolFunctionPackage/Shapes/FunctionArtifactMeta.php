<?php

namespace Sunaoka\Aws\Structures\Tnb\GetSolFunctionPackage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ToscaOverride> $overrides
 */
class FunctionArtifactMeta extends Shape
{
    /**
     * @param array{overrides?: list<ToscaOverride>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
