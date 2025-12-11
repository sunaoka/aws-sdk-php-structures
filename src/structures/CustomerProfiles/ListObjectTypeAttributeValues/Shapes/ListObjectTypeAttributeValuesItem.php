<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListObjectTypeAttributeValues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Value
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 */
class ListObjectTypeAttributeValuesItem extends Shape
{
    /**
     * @param array{
     *     Value: string,
     *     LastUpdatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
