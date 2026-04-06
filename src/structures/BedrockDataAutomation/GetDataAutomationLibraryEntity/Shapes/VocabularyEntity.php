<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\GetDataAutomationLibraryEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $entityId
 * @property string|null $description
 * @property 'EN'|'DE'|'ES'|'FR'|'IT'|'PT'|'JA'|'KO'|'CN'|'TW'|'HK'|null $language
 * @property list<Phrase>|null $phrases
 * @property \Aws\Api\DateTimeResult|null $lastModifiedTime
 */
class VocabularyEntity extends Shape
{
    /**
     * @param array{
     *     entityId?: string|null,
     *     description?: string|null,
     *     language?: 'EN'|'DE'|'ES'|'FR'|'IT'|'PT'|'JA'|'KO'|'CN'|'TW'|'HK'|null,
     *     phrases?: list<Phrase>|null,
     *     lastModifiedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
