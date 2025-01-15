<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectFaces;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\FaceDetail>|null $FaceDetails
 * @property 'ROTATE_0'|'ROTATE_90'|'ROTATE_180'|'ROTATE_270'|null $OrientationCorrection
 */
class DetectFacesResponse extends Response
{
}
