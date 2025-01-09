<?php

namespace Sunaoka\Aws\Structures\S3Control\ListAccessGrantsLocations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $AccessGrantsLocationId
 * @property string $AccessGrantsLocationArn
 * @property string $LocationScope
 * @property string $IAMRoleArn
 */
class ListAccessGrantsLocationsEntry extends Shape
{
    /**
     * @param array{
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     AccessGrantsLocationId?: string,
     *     AccessGrantsLocationArn?: string,
     *     LocationScope?: string,
     *     IAMRoleArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
