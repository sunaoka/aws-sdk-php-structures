<?php

namespace Sunaoka\Aws\Structures\Rekognition\SearchFacesByImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CollectionId
 * @property Shapes\Image $Image
 * @property int $MaxFaces
 * @property float $FaceMatchThreshold
 * @property 'NONE'|'AUTO'|'LOW'|'MEDIUM'|'HIGH' $QualityFilter
 */
class SearchFacesByImageRequest extends Request
{
    /**
     * @param array{
     *     CollectionId: string,
     *     Image: Shapes\Image,
     *     MaxFaces?: int,
     *     FaceMatchThreshold?: float,
     *     QualityFilter?: 'NONE'|'AUTO'|'LOW'|'MEDIUM'|'HIGH'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
