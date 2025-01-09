<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateExport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 */
class CustomVocabularyExportSpecification extends Shape
{
    /**
     * @param array{
     *     botId: string,
     *     botVersion: string,
     *     localeId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
