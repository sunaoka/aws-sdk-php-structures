<?php

namespace Sunaoka\Aws\Structures\Rekognition\SearchFacesByImage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\BoundingBox|null $SearchedFaceBoundingBox
 * @property float|null $SearchedFaceConfidence
 * @property list<Shapes\FaceMatch>|null $FaceMatches
 * @property string|null $FaceModelVersion
 */
class SearchFacesByImageResponse extends Response
{
}
