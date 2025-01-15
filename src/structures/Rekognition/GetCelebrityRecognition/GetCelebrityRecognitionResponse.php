<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetCelebrityRecognition;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|null $JobStatus
 * @property string|null $StatusMessage
 * @property Shapes\VideoMetadata|null $VideoMetadata
 * @property string|null $NextToken
 * @property list<Shapes\CelebrityRecognition>|null $Celebrities
 * @property string|null $JobId
 * @property Shapes\Video|null $Video
 * @property string|null $JobTag
 */
class GetCelebrityRecognitionResponse extends Response
{
}
