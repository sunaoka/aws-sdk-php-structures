<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\SearchImageSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ASC'|'DESC' $sortOrder
 * @property 'updatedAt'|'createdAt'|'DICOMStudyDateAndTime' $sortField
 */
class Sort extends Shape
{
    /**
     * @param array{
     *     sortOrder: 'ASC'|'DESC',
     *     sortField: 'updatedAt'|'createdAt'|'DICOMStudyDateAndTime'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
