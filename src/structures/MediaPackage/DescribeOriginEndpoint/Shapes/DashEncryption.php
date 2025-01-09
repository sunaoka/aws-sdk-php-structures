<?php

namespace Sunaoka\Aws\Structures\MediaPackage\DescribeOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $KeyRotationIntervalSeconds
 * @property SpekeKeyProvider $SpekeKeyProvider
 */
class DashEncryption extends Shape
{
    /**
     * @param array{
     *     KeyRotationIntervalSeconds?: int,
     *     SpekeKeyProvider: SpekeKeyProvider
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
