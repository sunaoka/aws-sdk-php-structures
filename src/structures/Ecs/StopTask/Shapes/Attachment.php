<?php

namespace Sunaoka\Aws\Structures\Ecs\StopTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $type
 * @property string|null $status
 * @property list<KeyValuePair>|null $details
 */
class Attachment extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     type?: string|null,
     *     status?: string|null,
     *     details?: list<KeyValuePair>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
