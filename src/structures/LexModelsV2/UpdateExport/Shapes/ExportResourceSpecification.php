<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateExport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BotExportSpecification $botExportSpecification
 * @property BotLocaleExportSpecification $botLocaleExportSpecification
 * @property CustomVocabularyExportSpecification $customVocabularyExportSpecification
 * @property TestSetExportSpecification $testSetExportSpecification
 */
class ExportResourceSpecification extends Shape
{
    /**
     * @param array{
     *     botExportSpecification?: BotExportSpecification,
     *     botLocaleExportSpecification?: BotLocaleExportSpecification,
     *     customVocabularyExportSpecification?: CustomVocabularyExportSpecification,
     *     testSetExportSpecification?: TestSetExportSpecification
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
