<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetContentModeration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED' $JobStatus
 * @property string $StatusMessage
 * @property Shapes\VideoMetadata $VideoMetadata
 * @property list<Shapes\ContentModerationDetection> $ModerationLabels
 * @property string $NextToken
 * @property string $ModerationModelVersion
 * @property string $JobId
 * @property Shapes\Video $Video
 * @property string $JobTag
 * @property Shapes\GetContentModerationRequestMetadata $GetRequestMetadata
 */
class GetContentModerationResponse extends Response
{
}
