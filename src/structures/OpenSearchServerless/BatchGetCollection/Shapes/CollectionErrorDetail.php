<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\BatchGetCollection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $errorCode
 * @property string $errorMessage
 * @property string $id
 * @property string $name
 */
class CollectionErrorDetail extends Shape
{
    /**
     * @param array{
     *     errorCode?: string,
     *     errorMessage?: string,
     *     id?: string,
     *     name?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
