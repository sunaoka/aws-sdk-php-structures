<?php

namespace Sunaoka\Aws\Structures\Rekognition\SearchFacesByImage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\BoundingBox $SearchedFaceBoundingBox
 * @property float $SearchedFaceConfidence
 * @property list<Shapes\FaceMatch> $FaceMatches
 * @property string $FaceModelVersion
 */
class SearchFacesByImageResponse extends Response
{
}
