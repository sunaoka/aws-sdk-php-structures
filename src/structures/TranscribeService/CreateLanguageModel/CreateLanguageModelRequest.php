<?php

namespace Sunaoka\Aws\Structures\TranscribeService\CreateLanguageModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'en-US'|'hi-IN'|'es-US'|'en-GB'|'en-AU'|'de-DE'|'ja-JP' $LanguageCode
 * @property 'NarrowBand'|'WideBand' $BaseModelName
 * @property string $ModelName
 * @property Shapes\InputDataConfig $InputDataConfig
 * @property list<Shapes\Tag> $Tags
 */
class CreateLanguageModelRequest extends Request
{
    /**
     * @param array{
     *     LanguageCode: 'en-US'|'hi-IN'|'es-US'|'en-GB'|'en-AU'|'de-DE'|'ja-JP',
     *     BaseModelName: 'NarrowBand'|'WideBand',
     *     ModelName: string,
     *     InputDataConfig: Shapes\InputDataConfig,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
