<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListProfileObjectTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ObjectTypeName
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 * @property int $MaxProfileObjectCount
 * @property int $MaxAvailableProfileObjectCount
 * @property array<string, string> $Tags
 */
class ListProfileObjectTypeItem extends Shape
{
    /**
     * @param array{
     *     ObjectTypeName: string,
     *     Description: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     MaxProfileObjectCount?: int,
     *     MaxAvailableProfileObjectCount?: int,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
