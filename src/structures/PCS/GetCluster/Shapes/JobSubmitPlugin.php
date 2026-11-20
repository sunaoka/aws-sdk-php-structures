<?php

namespace Sunaoka\Aws\Structures\PCS\GetCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'STARLARK' $type
 * @property JobSubmitScriptSource $scriptSource
 */
class JobSubmitPlugin extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     type: 'STARLARK',
     *     scriptSource: JobSubmitScriptSource
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
