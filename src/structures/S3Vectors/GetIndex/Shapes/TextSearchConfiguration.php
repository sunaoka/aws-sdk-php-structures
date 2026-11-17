<?php

namespace Sunaoka\Aws\Structures\S3Vectors\GetIndex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $metadataKey
 * @property 'en'|'fr'|'es'|'pt'|'it'|'de'|'nl'|'zh'|'ja'|'ko'|null $language
 * @property 'ACTIVE'|'BUILDING'|null $status
 */
class TextSearchConfiguration extends Shape
{
    /**
     * @param array{
     *     metadataKey: string,
     *     language?: 'en'|'fr'|'es'|'pt'|'it'|'de'|'nl'|'zh'|'ja'|'ko'|null,
     *     status?: 'ACTIVE'|'BUILDING'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
