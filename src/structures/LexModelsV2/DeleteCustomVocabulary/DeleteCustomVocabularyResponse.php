<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DeleteCustomVocabulary;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $botId
 * @property string|null $botVersion
 * @property string|null $localeId
 * @property 'Ready'|'Deleting'|'Exporting'|'Importing'|'Creating'|null $customVocabularyStatus
 */
class DeleteCustomVocabularyResponse extends Response
{
}
