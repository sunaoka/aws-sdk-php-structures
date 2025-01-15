<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeImport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BotImportSpecification|null $botImportSpecification
 * @property BotLocaleImportSpecification|null $botLocaleImportSpecification
 * @property CustomVocabularyImportSpecification|null $customVocabularyImportSpecification
 * @property TestSetImportResourceSpecification|null $testSetImportResourceSpecification
 */
class ImportResourceSpecification extends Shape
{
    /**
     * @param array{
     *     botImportSpecification?: BotImportSpecification|null,
     *     botLocaleImportSpecification?: BotLocaleImportSpecification|null,
     *     customVocabularyImportSpecification?: CustomVocabularyImportSpecification|null,
     *     testSetImportResourceSpecification?: TestSetImportResourceSpecification|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
