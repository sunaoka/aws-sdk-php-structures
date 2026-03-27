<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutQueryDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $defaultValue
 * @property string|null $description
 */
class QueryParameter extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     defaultValue?: string|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
