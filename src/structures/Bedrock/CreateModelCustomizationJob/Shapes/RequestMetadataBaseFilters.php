<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateModelCustomizationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $equals
 * @property array<string, string> $notEquals
 */
class RequestMetadataBaseFilters extends Shape
{
    /**
     * @param array{
     *     equals?: array<string, string>,
     *     notEquals?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
