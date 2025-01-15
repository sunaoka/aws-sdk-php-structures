<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\StartCodegenJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $isRelationshipSupported
 * @property bool|null $isNonModelSupported
 */
class CodegenFeatureFlags extends Shape
{
    /**
     * @param array{
     *     isRelationshipSupported?: bool|null,
     *     isNonModelSupported?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
