<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\CopyImageSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $latestVersionId
 * @property MetadataCopies $DICOMCopies
 */
class CopySourceImageSetInformation extends Shape
{
    /**
     * @param array{
     *     latestVersionId: string,
     *     DICOMCopies?: MetadataCopies
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
