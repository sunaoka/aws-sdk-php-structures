<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\GetDICOMImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DicomJsonMetadataImportConfiguration|null $dicomJsonMetadataImportConfiguration
 */
class ImportConfiguration extends Shape
{
    /**
     * @param array{dicomJsonMetadataImportConfiguration?: DicomJsonMetadataImportConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
