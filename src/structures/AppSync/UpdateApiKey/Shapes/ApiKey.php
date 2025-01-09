<?php

namespace Sunaoka\Aws\Structures\AppSync\UpdateApiKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $description
 * @property int $expires
 * @property int $deletes
 */
class ApiKey extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     description?: string,
     *     expires?: int,
     *     deletes?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
