<?php

namespace Sunaoka\Aws\Structures\Rekognition\SearchFacesByImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CollectionId
 * @property Shapes\Image $Image
 * @property int<1, 4096>|null $MaxFaces
 * @property float|null $FaceMatchThreshold
 * @property 'NONE'|'AUTO'|'LOW'|'MEDIUM'|'HIGH'|null $QualityFilter
 */
class SearchFacesByImageRequest extends Request
{
    /**
     * @param array{
     *     CollectionId: string,
     *     Image: Shapes\Image,
     *     MaxFaces?: int<1, 4096>|null,
     *     FaceMatchThreshold?: float|null,
     *     QualityFilter?: 'NONE'|'AUTO'|'LOW'|'MEDIUM'|'HIGH'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
