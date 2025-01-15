<?php

namespace Sunaoka\Aws\Structures\mgn\PutSourceServerAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $dynamicPath
 */
class SsmExternalParameter extends Shape
{
    /**
     * @param array{dynamicPath?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
