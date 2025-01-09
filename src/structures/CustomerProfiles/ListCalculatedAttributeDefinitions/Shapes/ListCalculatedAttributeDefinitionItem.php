<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListCalculatedAttributeDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CalculatedAttributeName
 * @property string $DisplayName
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 * @property array<string, string> $Tags
 */
class ListCalculatedAttributeDefinitionItem extends Shape
{
    /**
     * @param array{
     *     CalculatedAttributeName?: string,
     *     DisplayName?: string,
     *     Description?: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
