<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\BatchGetCollectionGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $name
 * @property string|null $errorMessage
 * @property string|null $errorCode
 */
class CollectionGroupErrorDetail extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     name?: string|null,
     *     errorMessage?: string|null,
     *     errorCode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
