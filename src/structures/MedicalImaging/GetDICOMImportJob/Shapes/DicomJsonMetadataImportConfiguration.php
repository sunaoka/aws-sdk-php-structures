<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\GetDICOMImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DicomMetadataMapping> $dicomMetadataMappings
 */
class DicomJsonMetadataImportConfiguration extends Shape
{
    /**
     * @param array{dicomMetadataMappings: list<DicomMetadataMapping>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
