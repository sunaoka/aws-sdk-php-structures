<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetSegmentDetection;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED' $JobStatus
 * @property string $StatusMessage
 * @property list<Shapes\VideoMetadata> $VideoMetadata
 * @property list<Shapes\AudioMetadata> $AudioMetadata
 * @property string $NextToken
 * @property list<Shapes\SegmentDetection> $Segments
 * @property list<Shapes\SegmentTypeInfo> $SelectedSegmentTypes
 * @property string $JobId
 * @property Shapes\Video $Video
 * @property string $JobTag
 */
class GetSegmentDetectionResponse extends Response
{
}
