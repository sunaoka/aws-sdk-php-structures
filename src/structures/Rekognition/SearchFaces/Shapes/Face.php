<?php

namespace Sunaoka\Aws\Structures\Rekognition\SearchFaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FaceId
 * @property BoundingBox $BoundingBox
 * @property string $ImageId
 * @property string $ExternalImageId
 * @property float $Confidence
 * @property string $IndexFacesModelVersion
 * @property string $UserId
 */
class Face extends Shape
{
    /**
     * @param array{
     *     FaceId?: string,
     *     BoundingBox?: BoundingBox,
     *     ImageId?: string,
     *     ExternalImageId?: string,
     *     Confidence?: float,
     *     IndexFacesModelVersion?: string,
     *     UserId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
