<?php

namespace Sunaoka\Aws\Structures\Iot\CreateOTAUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $fileName
 * @property int<0, 255>|null $fileType
 * @property string|null $fileVersion
 * @property FileLocation|null $fileLocation
 * @property CodeSigning|null $codeSigning
 * @property array<string, string>|null $attributes
 */
class OTAUpdateFile extends Shape
{
    /**
     * @param array{
     *     fileName?: string|null,
     *     fileType?: int<0, 255>|null,
     *     fileVersion?: string|null,
     *     fileLocation?: FileLocation|null,
     *     codeSigning?: CodeSigning|null,
     *     attributes?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
