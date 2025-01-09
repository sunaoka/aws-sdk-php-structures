<?php

namespace Sunaoka\Aws\Structures\TranscribeService\CreateLanguageModel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'en-US'|'hi-IN'|'es-US'|'en-GB'|'en-AU'|'de-DE'|'ja-JP' $LanguageCode
 * @property 'NarrowBand'|'WideBand' $BaseModelName
 * @property string $ModelName
 * @property Shapes\InputDataConfig $InputDataConfig
 * @property 'IN_PROGRESS'|'FAILED'|'COMPLETED' $ModelStatus
 */
class CreateLanguageModelResponse extends Response
{
}
