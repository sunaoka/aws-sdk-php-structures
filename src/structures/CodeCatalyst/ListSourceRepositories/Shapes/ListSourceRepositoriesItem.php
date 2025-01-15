<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\ListSourceRepositories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult $lastUpdatedTime
 * @property \Aws\Api\DateTimeResult $createdTime
 */
class ListSourceRepositoriesItem extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     name: string,
     *     description?: string|null,
     *     lastUpdatedTime: \Aws\Api\DateTimeResult,
     *     createdTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
