<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\CreateComponentVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GreengrassContainer'|'NoContainer'|null $isolationMode
 * @property LambdaContainerParams|null $containerParams
 */
class LambdaLinuxProcessParams extends Shape
{
    /**
     * @param array{
     *     isolationMode?: 'GreengrassContainer'|'NoContainer'|null,
     *     containerParams?: LambdaContainerParams|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
