<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetModels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $name
 * @property string|null $description
 * @property string|null $schema
 * @property string|null $contentType
 */
class Model extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     name?: string|null,
     *     description?: string|null,
     *     schema?: string|null,
     *     contentType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
