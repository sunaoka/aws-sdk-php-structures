<?php

namespace Sunaoka\Aws\Structures\Rekognition\RecognizeCelebrities;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\Celebrity>|null $CelebrityFaces
 * @property list<Shapes\ComparedFace>|null $UnrecognizedFaces
 * @property 'ROTATE_0'|'ROTATE_90'|'ROTATE_180'|'ROTATE_270'|null $OrientationCorrection
 */
class RecognizeCelebritiesResponse extends Response
{
}
