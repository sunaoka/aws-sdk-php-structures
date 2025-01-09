<?php

namespace Sunaoka\Aws\Structures\Comprehend\DetectEntities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Text
 * @property 'en'|'es'|'fr'|'de'|'it'|'pt'|'ar'|'hi'|'ja'|'ko'|'zh'|'zh-TW' $LanguageCode
 * @property string $EndpointArn
 * @property string $Bytes
 * @property Shapes\DocumentReaderConfig $DocumentReaderConfig
 */
class DetectEntitiesRequest extends Request
{
    /**
     * @param array{
     *     Text?: string,
     *     LanguageCode?: 'en'|'es'|'fr'|'de'|'it'|'pt'|'ar'|'hi'|'ja'|'ko'|'zh'|'zh-TW',
     *     EndpointArn?: string,
     *     Bytes?: string,
     *     DocumentReaderConfig?: Shapes\DocumentReaderConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
