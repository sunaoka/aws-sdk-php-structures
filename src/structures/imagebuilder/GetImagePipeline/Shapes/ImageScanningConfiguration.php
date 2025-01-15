<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetImagePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $imageScanningEnabled
 * @property EcrConfiguration|null $ecrConfiguration
 */
class ImageScanningConfiguration extends Shape
{
    /**
     * @param array{
     *     imageScanningEnabled?: bool|null,
     *     ecrConfiguration?: EcrConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
