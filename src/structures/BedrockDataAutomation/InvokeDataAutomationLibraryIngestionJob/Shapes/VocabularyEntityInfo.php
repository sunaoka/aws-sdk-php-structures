<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\InvokeDataAutomationLibraryIngestionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $entityId
 * @property string|null $description
 * @property 'EN'|'DE'|'ES'|'FR'|'IT'|'PT'|'JA'|'KO'|'CN'|'TW'|'HK' $language
 * @property list<Phrase> $phrases
 */
class VocabularyEntityInfo extends Shape
{
    /**
     * @param array{
     *     entityId?: string|null,
     *     description?: string|null,
     *     language: 'EN'|'DE'|'ES'|'FR'|'IT'|'PT'|'JA'|'KO'|'CN'|'TW'|'HK',
     *     phrases: list<Phrase>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
