<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\BatchCreateCustomVocabularyItem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 * @property list<Shapes\NewCustomVocabularyItem> $customVocabularyItemList
 */
class BatchCreateCustomVocabularyItemRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     botVersion: string,
     *     localeId: string,
     *     customVocabularyItemList: list<Shapes\NewCustomVocabularyItem>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
