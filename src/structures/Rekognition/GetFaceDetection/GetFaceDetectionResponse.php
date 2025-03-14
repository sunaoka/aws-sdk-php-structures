<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetFaceDetection;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|null $JobStatus
 * @property string|null $StatusMessage
 * @property Shapes\VideoMetadata|null $VideoMetadata
 * @property string|null $NextToken
 * @property list<Shapes\FaceDetection>|null $Faces
 * @property string|null $JobId
 * @property Shapes\Video|null $Video
 * @property string|null $JobTag
 */
class GetFaceDetectionResponse extends Response
{
}
