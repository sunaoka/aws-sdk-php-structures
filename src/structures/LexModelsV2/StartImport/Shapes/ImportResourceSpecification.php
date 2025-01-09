<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\StartImport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BotImportSpecification $botImportSpecification
 * @property BotLocaleImportSpecification $botLocaleImportSpecification
 * @property CustomVocabularyImportSpecification $customVocabularyImportSpecification
 * @property TestSetImportResourceSpecification $testSetImportResourceSpecification
 */
class ImportResourceSpecification extends Shape
{
    /**
     * @param array{
     *     botImportSpecification?: BotImportSpecification,
     *     botLocaleImportSpecification?: BotLocaleImportSpecification,
     *     customVocabularyImportSpecification?: CustomVocabularyImportSpecification,
     *     testSetImportResourceSpecification?: TestSetImportResourceSpecification
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
