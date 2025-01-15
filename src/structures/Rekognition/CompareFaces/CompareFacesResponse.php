<?php

namespace Sunaoka\Aws\Structures\Rekognition\CompareFaces;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\ComparedSourceImageFace|null $SourceImageFace
 * @property list<Shapes\CompareFacesMatch>|null $FaceMatches
 * @property list<Shapes\ComparedFace>|null $UnmatchedFaces
 * @property 'ROTATE_0'|'ROTATE_90'|'ROTATE_180'|'ROTATE_270'|null $SourceImageOrientationCorrection
 * @property 'ROTATE_0'|'ROTATE_90'|'ROTATE_180'|'ROTATE_270'|null $TargetImageOrientationCorrection
 */
class CompareFacesResponse extends Response
{
}
