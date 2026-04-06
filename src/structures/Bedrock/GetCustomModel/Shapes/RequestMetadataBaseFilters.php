<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetCustomModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $equals
 * @property array<string, string>|null $notEquals
 */
class RequestMetadataBaseFilters extends Shape
{
    /**
     * @param array{
     *     equals?: array<string, string>|null,
     *     notEquals?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
