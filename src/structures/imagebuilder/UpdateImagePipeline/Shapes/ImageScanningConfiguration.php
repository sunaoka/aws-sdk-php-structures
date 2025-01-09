<?php

namespace Sunaoka\Aws\Structures\imagebuilder\UpdateImagePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $imageScanningEnabled
 * @property EcrConfiguration $ecrConfiguration
 */
class ImageScanningConfiguration extends Shape
{
    /**
     * @param array{
     *     imageScanningEnabled?: bool,
     *     ecrConfiguration?: EcrConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
