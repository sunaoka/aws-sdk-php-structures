<?php

namespace Sunaoka\Aws\Structures\FMS\ListResourceSetResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $URI
 * @property string $AccountId
 */
class Resource extends Shape
{
    /**
     * @param array{
     *     URI: string,
     *     AccountId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
