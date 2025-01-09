<?php

namespace Sunaoka\Aws\Structures\Iot\CreateOTAUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fileName
 * @property int<0, 255> $fileType
 * @property string $fileVersion
 * @property FileLocation $fileLocation
 * @property CodeSigning $codeSigning
 * @property array<string, string> $attributes
 */
class OTAUpdateFile extends Shape
{
    /**
     * @param array{
     *     fileName?: string,
     *     fileType?: int<0, 255>,
     *     fileVersion?: string,
     *     fileLocation?: FileLocation,
     *     codeSigning?: CodeSigning,
     *     attributes?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
