<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetModels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property string $description
 * @property string $schema
 * @property string $contentType
 */
class Model extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     name?: string,
     *     description?: string,
     *     schema?: string,
     *     contentType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
