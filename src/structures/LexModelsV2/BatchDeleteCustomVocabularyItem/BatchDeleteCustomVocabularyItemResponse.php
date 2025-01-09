<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\BatchDeleteCustomVocabularyItem;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 * @property list<Shapes\FailedCustomVocabularyItem> $errors
 * @property list<Shapes\CustomVocabularyItem> $resources
 */
class BatchDeleteCustomVocabularyItemResponse extends Response
{
}
