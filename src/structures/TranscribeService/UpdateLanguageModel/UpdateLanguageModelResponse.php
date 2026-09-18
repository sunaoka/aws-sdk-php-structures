<?php

namespace Sunaoka\Aws\Structures\TranscribeService\UpdateLanguageModel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ModelName
 * @property 'IN_PROGRESS'|'FAILED'|'COMPLETED'|null $ModelStatus
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 */
class UpdateLanguageModelResponse extends Response
{
}
