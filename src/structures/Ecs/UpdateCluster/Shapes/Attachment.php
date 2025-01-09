<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $type
 * @property string $status
 * @property list<KeyValuePair> $details
 */
class Attachment extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     type?: string,
     *     status?: string,
     *     details?: list<KeyValuePair>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
