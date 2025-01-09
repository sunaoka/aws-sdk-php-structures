<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetLabelDetection;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED' $JobStatus
 * @property string $StatusMessage
 * @property Shapes\VideoMetadata $VideoMetadata
 * @property string $NextToken
 * @property list<Shapes\LabelDetection> $Labels
 * @property string $LabelModelVersion
 * @property string $JobId
 * @property Shapes\Video $Video
 * @property string $JobTag
 * @property Shapes\GetLabelDetectionRequestMetadata $GetRequestMetadata
 */
class GetLabelDetectionResponse extends Response
{
}
