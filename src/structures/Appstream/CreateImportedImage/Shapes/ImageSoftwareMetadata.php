<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateImportedImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $nvidiaGridDriverVersion
 */
class ImageSoftwareMetadata extends Shape
{
    /**
     * @param array{nvidiaGridDriverVersion?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
