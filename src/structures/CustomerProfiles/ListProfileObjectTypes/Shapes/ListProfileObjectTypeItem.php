<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListProfileObjectTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ObjectTypeName
 * @property string $Description
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property int<1, max>|null $MaxProfileObjectCount
 * @property int<0, max>|null $MaxAvailableProfileObjectCount
 * @property int<1, max>|null $SourcePriority
 * @property array<string, string>|null $Tags
 */
class ListProfileObjectTypeItem extends Shape
{
    /**
     * @param array{
     *     ObjectTypeName: string,
     *     Description: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     MaxProfileObjectCount?: int<1, max>|null,
     *     MaxAvailableProfileObjectCount?: int<0, max>|null,
     *     SourcePriority?: int<1, max>|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
