<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetAccessPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accessPointPolicy
 * @property S3PublicAccessBlockConfiguration $publicAccessBlock
 * @property NetworkOriginConfiguration $networkOrigin
 */
class S3AccessPointConfiguration extends Shape
{
    /**
     * @param array{
     *     accessPointPolicy?: string,
     *     publicAccessBlock?: S3PublicAccessBlockConfiguration,
     *     networkOrigin?: NetworkOriginConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
