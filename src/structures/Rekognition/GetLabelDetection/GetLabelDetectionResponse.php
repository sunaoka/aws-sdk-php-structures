<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetLabelDetection;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|null $JobStatus
 * @property string|null $StatusMessage
 * @property Shapes\VideoMetadata|null $VideoMetadata
 * @property string|null $NextToken
 * @property list<Shapes\LabelDetection>|null $Labels
 * @property string|null $LabelModelVersion
 * @property string|null $JobId
 * @property Shapes\Video|null $Video
 * @property string|null $JobTag
 * @property Shapes\GetLabelDetectionRequestMetadata|null $GetRequestMetadata
 */
class GetLabelDetectionResponse extends Response
{
}
