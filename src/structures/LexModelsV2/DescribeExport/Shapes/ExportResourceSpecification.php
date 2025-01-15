<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeExport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BotExportSpecification|null $botExportSpecification
 * @property BotLocaleExportSpecification|null $botLocaleExportSpecification
 * @property CustomVocabularyExportSpecification|null $customVocabularyExportSpecification
 * @property TestSetExportSpecification|null $testSetExportSpecification
 */
class ExportResourceSpecification extends Shape
{
    /**
     * @param array{
     *     botExportSpecification?: BotExportSpecification|null,
     *     botLocaleExportSpecification?: BotLocaleExportSpecification|null,
     *     customVocabularyExportSpecification?: CustomVocabularyExportSpecification|null,
     *     testSetExportSpecification?: TestSetExportSpecification|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
