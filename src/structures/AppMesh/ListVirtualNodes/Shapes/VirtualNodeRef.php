<?php

namespace Sunaoka\Aws\Structures\AppMesh\ListVirtualNodes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property string $meshName
 * @property string $meshOwner
 * @property string $resourceOwner
 * @property int $version
 * @property string $virtualNodeName
 */
class VirtualNodeRef extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     lastUpdatedAt: \Aws\Api\DateTimeResult,
     *     meshName: string,
     *     meshOwner: string,
     *     resourceOwner: string,
     *     version: int,
     *     virtualNodeName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
