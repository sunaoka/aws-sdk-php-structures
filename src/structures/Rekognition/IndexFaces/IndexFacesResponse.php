<?php

namespace Sunaoka\Aws\Structures\Rekognition\IndexFaces;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\FaceRecord> $FaceRecords
 * @property 'ROTATE_0'|'ROTATE_90'|'ROTATE_180'|'ROTATE_270' $OrientationCorrection
 * @property string $FaceModelVersion
 * @property list<Shapes\UnindexedFace> $UnindexedFaces
 */
class IndexFacesResponse extends Response
{
}
