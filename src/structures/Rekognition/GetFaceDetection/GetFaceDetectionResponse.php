<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetFaceDetection;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED' $JobStatus
 * @property string $StatusMessage
 * @property Shapes\VideoMetadata $VideoMetadata
 * @property string $NextToken
 * @property list<Shapes\FaceDetection> $Faces
 * @property string $JobId
 * @property Shapes\Video $Video
 * @property string $JobTag
 */
class GetFaceDetectionResponse extends Response
{
}
