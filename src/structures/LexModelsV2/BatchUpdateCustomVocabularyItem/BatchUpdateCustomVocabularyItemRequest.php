<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\BatchUpdateCustomVocabularyItem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 * @property list<Shapes\CustomVocabularyItem> $customVocabularyItemList
 */
class BatchUpdateCustomVocabularyItemRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     botVersion: string,
     *     localeId: string,
     *     customVocabularyItemList: list<Shapes\CustomVocabularyItem>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
