<?php

namespace Sunaoka\Aws\Structures\TranscribeService\CreateLanguageModel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'en-US'|'hi-IN'|'es-US'|'en-GB'|'en-AU'|'de-DE'|'ja-JP'|null $LanguageCode
 * @property 'NarrowBand'|'WideBand'|null $BaseModelName
 * @property string|null $ModelName
 * @property Shapes\InputDataConfig|null $InputDataConfig
 * @property 'IN_PROGRESS'|'FAILED'|'COMPLETED'|null $ModelStatus
 */
class CreateLanguageModelResponse extends Response
{
}
