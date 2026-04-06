<?php

namespace Sunaoka\Aws\Structures\S3Control\ListAccessGrantsLocations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $AccessGrantsLocationId
 * @property string|null $AccessGrantsLocationArn
 * @property string|null $LocationScope
 * @property string|null $IAMRoleArn
 */
class ListAccessGrantsLocationsEntry extends Shape
{
    /**
     * @param array{
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     AccessGrantsLocationId?: string|null,
     *     AccessGrantsLocationArn?: string|null,
     *     LocationScope?: string|null,
     *     IAMRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
