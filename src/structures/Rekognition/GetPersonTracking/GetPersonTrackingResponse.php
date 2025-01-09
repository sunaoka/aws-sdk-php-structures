<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetPersonTracking;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED' $JobStatus
 * @property string $StatusMessage
 * @property Shapes\VideoMetadata $VideoMetadata
 * @property string $NextToken
 * @property list<Shapes\PersonDetection> $Persons
 * @property string $JobId
 * @property Shapes\Video $Video
 * @property string $JobTag
 */
class GetPersonTrackingResponse extends Response
{
}
