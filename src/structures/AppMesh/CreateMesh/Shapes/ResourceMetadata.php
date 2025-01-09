<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateMesh\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property string $meshOwner
 * @property string $resourceOwner
 * @property string $uid
 * @property int $version
 */
class ResourceMetadata extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     lastUpdatedAt: \Aws\Api\DateTimeResult,
     *     meshOwner: string,
     *     resourceOwner: string,
     *     uid: string,
     *     version: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
