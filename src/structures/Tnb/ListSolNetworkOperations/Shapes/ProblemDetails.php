<?php

namespace Sunaoka\Aws\Structures\Tnb\ListSolNetworkOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $detail
 * @property string $title
 */
class ProblemDetails extends Shape
{
    /**
     * @param array{
     *     detail: string,
     *     title?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
