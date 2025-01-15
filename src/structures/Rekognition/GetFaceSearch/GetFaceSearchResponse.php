<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetFaceSearch;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|null $JobStatus
 * @property string|null $StatusMessage
 * @property string|null $NextToken
 * @property Shapes\VideoMetadata|null $VideoMetadata
 * @property list<Shapes\PersonMatch>|null $Persons
 * @property string|null $JobId
 * @property Shapes\Video|null $Video
 * @property string|null $JobTag
 */
class GetFaceSearchResponse extends Response
{
}
