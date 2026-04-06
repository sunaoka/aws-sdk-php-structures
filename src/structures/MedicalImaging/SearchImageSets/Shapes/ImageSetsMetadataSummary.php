<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\SearchImageSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $imageSetId
 * @property int|null $version
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property \Aws\Api\DateTimeResult|null $lastAccessedAt
 * @property 'FREQUENT_ACCESS'|'ARCHIVE_INSTANT_ACCESS'|null $storageTier
 * @property DICOMTags|null $DICOMTags
 * @property bool|null $isPrimary
 */
class ImageSetsMetadataSummary extends Shape
{
    /**
     * @param array{
     *     imageSetId: string,
     *     version?: int|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     lastAccessedAt?: \Aws\Api\DateTimeResult|null,
     *     storageTier?: 'FREQUENT_ACCESS'|'ARCHIVE_INSTANT_ACCESS'|null,
     *     DICOMTags?: DICOMTags|null,
     *     isPrimary?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
