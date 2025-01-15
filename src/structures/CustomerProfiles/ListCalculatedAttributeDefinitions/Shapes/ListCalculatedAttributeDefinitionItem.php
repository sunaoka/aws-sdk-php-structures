<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListCalculatedAttributeDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CalculatedAttributeName
 * @property string|null $DisplayName
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property array<string, string>|null $Tags
 */
class ListCalculatedAttributeDefinitionItem extends Shape
{
    /**
     * @param array{
     *     CalculatedAttributeName?: string|null,
     *     DisplayName?: string|null,
     *     Description?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
