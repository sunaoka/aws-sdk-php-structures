<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetTextDetection;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|null $JobStatus
 * @property string|null $StatusMessage
 * @property Shapes\VideoMetadata|null $VideoMetadata
 * @property list<Shapes\TextDetectionResult>|null $TextDetections
 * @property string|null $NextToken
 * @property string|null $TextModelVersion
 * @property string|null $JobId
 * @property Shapes\Video|null $Video
 * @property string|null $JobTag
 */
class GetTextDetectionResponse extends Response
{
}
