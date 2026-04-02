<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\ListDataAutomationLibraryEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $entityId
 * @property string|null $description
 * @property 'EN'|'DE'|'ES'|'FR'|'IT'|'PT'|'JA'|'KO'|'CN'|'TW'|'HK'|null $language
 * @property int<1, max>|null $numOfPhrases
 * @property \Aws\Api\DateTimeResult|null $lastModifiedTime
 */
class VocabularyEntitySummary extends Shape
{
    /**
     * @param array{
     *     entityId?: string|null,
     *     description?: string|null,
     *     language?: 'EN'|'DE'|'ES'|'FR'|'IT'|'PT'|'JA'|'KO'|'CN'|'TW'|'HK'|null,
     *     numOfPhrases?: int<1, max>|null,
     *     lastModifiedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
