<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListObjectTypeAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AttributeName
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 */
class ListObjectTypeAttributeItem extends Shape
{
    /**
     * @param array{
     *     AttributeName: string,
     *     LastUpdatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
