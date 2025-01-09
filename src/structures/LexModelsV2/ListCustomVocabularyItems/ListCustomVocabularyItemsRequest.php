<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListCustomVocabularyItems;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 * @property int $maxResults
 * @property string $nextToken
 */
class ListCustomVocabularyItemsRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     botVersion: string,
     *     localeId: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
