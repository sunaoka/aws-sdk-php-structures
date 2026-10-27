<?php

namespace Sunaoka\Aws\Structures\MediaConnect\BatchGetSourceEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StandardSourceEndpointConfiguration|null $Standard
 * @property RouterOutputSourceEndpointConfiguration|null $RouterOutput
 */
class SourceEndpointConfiguration extends Shape
{
    /**
     * @param array{
     *     Standard?: StandardSourceEndpointConfiguration|null,
     *     RouterOutput?: RouterOutputSourceEndpointConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
