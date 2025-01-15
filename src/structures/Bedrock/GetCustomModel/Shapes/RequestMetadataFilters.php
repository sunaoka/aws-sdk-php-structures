<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetCustomModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $equals
 * @property array<string, string>|null $notEquals
 * @property list<RequestMetadataBaseFilters>|null $andAll
 * @property list<RequestMetadataBaseFilters>|null $orAll
 */
class RequestMetadataFilters extends Shape
{
    /**
     * @param array{
     *     equals?: array<string, string>|null,
     *     notEquals?: array<string, string>|null,
     *     andAll?: list<RequestMetadataBaseFilters>|null,
     *     orAll?: list<RequestMetadataBaseFilters>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
