<?php

namespace Sunaoka\Aws\Structures\Tnb\PutSolNetworkPackageContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $defaultValue
 * @property string $name
 */
class ToscaOverride extends Shape
{
    /**
     * @param array{
     *     defaultValue?: string,
     *     name?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
