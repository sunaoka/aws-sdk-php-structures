<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateModelCustomizationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $equals
 * @property array<string, string> $notEquals
 * @property list<RequestMetadataBaseFilters> $andAll
 * @property list<RequestMetadataBaseFilters> $orAll
 */
class RequestMetadataFilters extends Shape
{
    /**
     * @param array{
     *     equals?: array<string, string>,
     *     notEquals?: array<string, string>,
     *     andAll?: list<RequestMetadataBaseFilters>,
     *     orAll?: list<RequestMetadataBaseFilters>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
