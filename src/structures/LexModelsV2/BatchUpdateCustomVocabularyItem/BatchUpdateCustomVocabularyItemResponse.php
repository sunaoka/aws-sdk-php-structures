<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\BatchUpdateCustomVocabularyItem;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $botId
 * @property string|null $botVersion
 * @property string|null $localeId
 * @property list<Shapes\FailedCustomVocabularyItem>|null $errors
 * @property list<Shapes\CustomVocabularyItem>|null $resources
 */
class BatchUpdateCustomVocabularyItemResponse extends Response
{
}
