<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListProfileObjectTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ObjectTypeName
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 * @property int<1, max> $MaxProfileObjectCount
 * @property int<0, max> $MaxAvailableProfileObjectCount
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
     *     MaxProfileObjectCount?: int<1, max>,
     *     MaxAvailableProfileObjectCount?: int<0, max>,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
