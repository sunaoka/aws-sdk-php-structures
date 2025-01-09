<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\BatchDeleteCustomVocabularyItem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 * @property list<Shapes\CustomVocabularyEntryId> $customVocabularyItemList
 */
class BatchDeleteCustomVocabularyItemRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     botVersion: string,
     *     localeId: string,
     *     customVocabularyItemList: list<Shapes\CustomVocabularyEntryId>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
