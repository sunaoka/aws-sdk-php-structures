<?php

namespace Sunaoka\Aws\Structures\Comprehend\DetectEntities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Text
 * @property 'en'|'es'|'fr'|'de'|'it'|'pt'|'ar'|'hi'|'ja'|'ko'|'zh'|'zh-TW'|null $LanguageCode
 * @property string|null $EndpointArn
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $Bytes
 * @property Shapes\DocumentReaderConfig|null $DocumentReaderConfig
 */
class DetectEntitiesRequest extends Request
{
    /**
     * @param array{
     *     Text?: string|null,
     *     LanguageCode?: 'en'|'es'|'fr'|'de'|'it'|'pt'|'ar'|'hi'|'ja'|'ko'|'zh'|'zh-TW'|null,
     *     EndpointArn?: string|null,
     *     Bytes?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     DocumentReaderConfig?: Shapes\DocumentReaderConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
