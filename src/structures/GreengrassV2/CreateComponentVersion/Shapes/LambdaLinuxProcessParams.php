<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\CreateComponentVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GreengrassContainer'|'NoContainer' $isolationMode
 * @property LambdaContainerParams $containerParams
 */
class LambdaLinuxProcessParams extends Shape
{
    /**
     * @param array{
     *     isolationMode?: 'GreengrassContainer'|'NoContainer',
     *     containerParams?: LambdaContainerParams
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
