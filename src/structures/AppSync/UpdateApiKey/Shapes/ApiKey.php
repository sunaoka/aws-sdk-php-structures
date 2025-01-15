<?php

namespace Sunaoka\Aws\Structures\AppSync\UpdateApiKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $description
 * @property int|null $expires
 * @property int|null $deletes
 */
class ApiKey extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     description?: string|null,
     *     expires?: int|null,
     *     deletes?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
