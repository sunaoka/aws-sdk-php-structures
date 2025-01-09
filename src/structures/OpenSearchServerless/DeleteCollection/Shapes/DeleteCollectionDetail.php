<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\DeleteCollection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property 'CREATING'|'DELETING'|'ACTIVE'|'FAILED' $status
 */
class DeleteCollectionDetail extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     name?: string,
     *     status?: 'CREATING'|'DELETING'|'ACTIVE'|'FAILED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
