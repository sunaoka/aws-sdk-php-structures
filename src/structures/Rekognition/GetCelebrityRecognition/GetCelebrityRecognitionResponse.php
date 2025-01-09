<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetCelebrityRecognition;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED' $JobStatus
 * @property string $StatusMessage
 * @property Shapes\VideoMetadata $VideoMetadata
 * @property string $NextToken
 * @property list<Shapes\CelebrityRecognition> $Celebrities
 * @property string $JobId
 * @property Shapes\Video $Video
 * @property string $JobTag
 */
class GetCelebrityRecognitionResponse extends Response
{
}
