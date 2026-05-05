<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\GetDICOMImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $studyInstanceUID
 * @property string|null $seriesInstanceUID
 * @property string $metadataFilePath
 */
class DicomMetadataMapping extends Shape
{
    /**
     * @param array{
     *     studyInstanceUID: string,
     *     seriesInstanceUID?: string|null,
     *     metadataFilePath: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
