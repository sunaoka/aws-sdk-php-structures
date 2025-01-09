<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\SearchImageSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $imageSetId
 * @property int $version
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property DICOMTags $DICOMTags
 */
class ImageSetsMetadataSummary extends Shape
{
    /**
     * @param array{
     *     imageSetId: string,
     *     version?: int,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     updatedAt?: \Aws\Api\DateTimeResult,
     *     DICOMTags?: DICOMTags
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
