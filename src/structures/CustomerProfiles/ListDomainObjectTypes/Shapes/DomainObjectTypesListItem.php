<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListDomainObjectTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ObjectTypeName
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property array<string, string>|null $Tags
 */
class DomainObjectTypesListItem extends Shape
{
    /**
     * @param array{
     *     ObjectTypeName: string,
     *     Description?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
