<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetContentModeration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|null $JobStatus
 * @property string|null $StatusMessage
 * @property Shapes\VideoMetadata|null $VideoMetadata
 * @property list<Shapes\ContentModerationDetection>|null $ModerationLabels
 * @property string|null $NextToken
 * @property string|null $ModerationModelVersion
 * @property string|null $JobId
 * @property Shapes\Video|null $Video
 * @property string|null $JobTag
 * @property Shapes\GetContentModerationRequestMetadata|null $GetRequestMetadata
 */
class GetContentModerationResponse extends Response
{
}
