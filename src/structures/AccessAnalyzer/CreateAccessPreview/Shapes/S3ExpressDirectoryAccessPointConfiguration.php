<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\CreateAccessPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accessPointPolicy
 * @property NetworkOriginConfiguration|null $networkOrigin
 */
class S3ExpressDirectoryAccessPointConfiguration extends Shape
{
    /**
     * @param array{
     *     accessPointPolicy?: string|null,
     *     networkOrigin?: NetworkOriginConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
