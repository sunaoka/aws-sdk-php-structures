<?php

namespace Sunaoka\Aws\Structures\Rekognition\IndexFaces;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\FaceRecord>|null $FaceRecords
 * @property 'ROTATE_0'|'ROTATE_90'|'ROTATE_180'|'ROTATE_270'|null $OrientationCorrection
 * @property string|null $FaceModelVersion
 * @property list<Shapes\UnindexedFace>|null $UnindexedFaces
 */
class IndexFacesResponse extends Response
{
}
