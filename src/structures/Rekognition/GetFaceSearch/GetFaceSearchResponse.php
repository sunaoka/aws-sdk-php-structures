<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetFaceSearch;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED' $JobStatus
 * @property string $StatusMessage
 * @property string $NextToken
 * @property Shapes\VideoMetadata $VideoMetadata
 * @property list<Shapes\PersonMatch> $Persons
 * @property string $JobId
 * @property Shapes\Video $Video
 * @property string $JobTag
 */
class GetFaceSearchResponse extends Response
{
}
