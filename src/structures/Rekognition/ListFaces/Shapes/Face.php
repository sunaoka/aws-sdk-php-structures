<?php

namespace Sunaoka\Aws\Structures\Rekognition\ListFaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FaceId
 * @property BoundingBox|null $BoundingBox
 * @property string|null $ImageId
 * @property string|null $ExternalImageId
 * @property float|null $Confidence
 * @property string|null $IndexFacesModelVersion
 * @property string|null $UserId
 */
class Face extends Shape
{
    /**
     * @param array{
     *     FaceId?: string|null,
     *     BoundingBox?: BoundingBox|null,
     *     ImageId?: string|null,
     *     ExternalImageId?: string|null,
     *     Confidence?: float|null,
     *     IndexFacesModelVersion?: string|null,
     *     UserId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
