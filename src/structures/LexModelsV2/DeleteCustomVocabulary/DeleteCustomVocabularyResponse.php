<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DeleteCustomVocabulary;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 * @property 'Ready'|'Deleting'|'Exporting'|'Importing'|'Creating' $customVocabularyStatus
 */
class DeleteCustomVocabularyResponse extends Response
{
}
