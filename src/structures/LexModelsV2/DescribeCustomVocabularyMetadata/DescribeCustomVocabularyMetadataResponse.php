<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeCustomVocabularyMetadata;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $botId
 * @property string|null $botVersion
 * @property string|null $localeId
 * @property 'Ready'|'Deleting'|'Exporting'|'Importing'|'Creating'|null $customVocabularyStatus
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 */
class DescribeCustomVocabularyMetadataResponse extends Response
{
}
