<?php

namespace Sunaoka\Aws\Structures\TranscribeService\CreateLanguageModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'en-US'|'hi-IN'|'es-US'|'en-GB'|'en-AU'|'de-DE'|'ja-JP' $LanguageCode
 * @property 'NarrowBand'|'WideBand' $BaseModelName
 * @property string $ModelName
 * @property Shapes\InputDataConfig $InputDataConfig
 * @property Shapes\EncryptionConfiguration|null $EncryptionConfiguration
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateLanguageModelRequest extends Request
{
    /**
     * @param array{
     *     LanguageCode: 'en-US'|'hi-IN'|'es-US'|'en-GB'|'en-AU'|'de-DE'|'ja-JP',
     *     BaseModelName: 'NarrowBand'|'WideBand',
     *     ModelName: string,
     *     InputDataConfig: Shapes\InputDataConfig,
     *     EncryptionConfiguration?: Shapes\EncryptionConfiguration|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
