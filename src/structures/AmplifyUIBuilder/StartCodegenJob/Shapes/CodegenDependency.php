<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\StartCodegenJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $supportedVersion
 * @property bool|null $isSemVer
 * @property string|null $reason
 */
class CodegenDependency extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     supportedVersion?: string|null,
     *     isSemVer?: bool|null,
     *     reason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
