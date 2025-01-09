<?php

namespace Sunaoka\Aws\Structures\Rekognition\CompareFaces;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\ComparedSourceImageFace $SourceImageFace
 * @property list<Shapes\CompareFacesMatch> $FaceMatches
 * @property list<Shapes\ComparedFace> $UnmatchedFaces
 * @property 'ROTATE_0'|'ROTATE_90'|'ROTATE_180'|'ROTATE_270' $SourceImageOrientationCorrection
 * @property 'ROTATE_0'|'ROTATE_90'|'ROTATE_180'|'ROTATE_270' $TargetImageOrientationCorrection
 */
class CompareFacesResponse extends Response
{
}
