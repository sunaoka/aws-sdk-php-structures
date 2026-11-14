<?php

namespace Sunaoka\Aws\Structures\LambdaCore\GetRuntime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PREVIEW'|'GA'|'DEPRECATED'|null $ReleaseState
 * @property string|null $DeprecationDate
 * @property string|null $FunctionCreateBlockDate
 * @property string|null $FunctionUpdateBlockDate
 */
class RuntimeReleaseLifecycle extends Shape
{
    /**
     * @param array{
     *     ReleaseState?: 'PREVIEW'|'GA'|'DEPRECATED'|null,
     *     DeprecationDate?: string|null,
     *     FunctionCreateBlockDate?: string|null,
     *     FunctionUpdateBlockDate?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
