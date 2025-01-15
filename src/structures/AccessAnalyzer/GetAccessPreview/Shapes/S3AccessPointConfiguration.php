<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetAccessPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accessPointPolicy
 * @property S3PublicAccessBlockConfiguration|null $publicAccessBlock
 * @property NetworkOriginConfiguration|null $networkOrigin
 */
class S3AccessPointConfiguration extends Shape
{
    /**
     * @param array{
     *     accessPointPolicy?: string|null,
     *     publicAccessBlock?: S3PublicAccessBlockConfiguration|null,
     *     networkOrigin?: NetworkOriginConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
