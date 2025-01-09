<?php

namespace Sunaoka\Aws\Structures\Rekognition\RecognizeCelebrities;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\Celebrity> $CelebrityFaces
 * @property list<Shapes\ComparedFace> $UnrecognizedFaces
 * @property 'ROTATE_0'|'ROTATE_90'|'ROTATE_180'|'ROTATE_270' $OrientationCorrection
 */
class RecognizeCelebritiesResponse extends Response
{
}
