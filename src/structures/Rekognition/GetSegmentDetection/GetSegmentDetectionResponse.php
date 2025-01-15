<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetSegmentDetection;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|null $JobStatus
 * @property string|null $StatusMessage
 * @property list<Shapes\VideoMetadata>|null $VideoMetadata
 * @property list<Shapes\AudioMetadata>|null $AudioMetadata
 * @property string|null $NextToken
 * @property list<Shapes\SegmentDetection>|null $Segments
 * @property list<Shapes\SegmentTypeInfo>|null $SelectedSegmentTypes
 * @property string|null $JobId
 * @property Shapes\Video|null $Video
 * @property string|null $JobTag
 */
class GetSegmentDetectionResponse extends Response
{
}
