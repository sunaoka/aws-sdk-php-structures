<?php

namespace Sunaoka\Aws\Structures\LambdaWeb\CreateWebFunctionRevision\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CodeConfig $codeConfig
 * @property RuntimeConfig $runtimeConfig
 */
class BuildConfig extends Shape
{
    /**
     * @param array{
     *     codeConfig: CodeConfig,
     *     runtimeConfig: RuntimeConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
