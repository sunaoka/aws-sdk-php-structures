<?php

namespace Sunaoka\Aws\Structures\Glue\RegisterConnectionType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ContentPath
 * @property string|null $HeaderKey
 */
class ResponseExtractionMapping extends Shape
{
    /**
     * @param array{
     *     ContentPath?: string|null,
     *     HeaderKey?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
