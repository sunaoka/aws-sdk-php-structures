<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\GetCodegenJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $supportedVersion
 * @property bool $isSemVer
 * @property string $reason
 */
class CodegenDependency extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     supportedVersion?: string,
     *     isSemVer?: bool,
     *     reason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
