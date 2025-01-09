<?php

namespace Sunaoka\Aws\Structures\Rekognition\CompareFaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Image $SourceImage
 * @property Shapes\Image $TargetImage
 * @property float $SimilarityThreshold
 * @property 'NONE'|'AUTO'|'LOW'|'MEDIUM'|'HIGH' $QualityFilter
 */
class CompareFacesRequest extends Request
{
    /**
     * @param array{
     *     SourceImage: Shapes\Image,
     *     TargetImage: Shapes\Image,
     *     SimilarityThreshold?: float,
     *     QualityFilter?: 'NONE'|'AUTO'|'LOW'|'MEDIUM'|'HIGH'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
