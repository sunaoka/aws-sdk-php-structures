<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetTextDetection;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED' $JobStatus
 * @property string $StatusMessage
 * @property Shapes\VideoMetadata $VideoMetadata
 * @property list<Shapes\TextDetectionResult> $TextDetections
 * @property string $NextToken
 * @property string $TextModelVersion
 * @property string $JobId
 * @property Shapes\Video $Video
 * @property string $JobTag
 */
class GetTextDetectionResponse extends Response
{
}
