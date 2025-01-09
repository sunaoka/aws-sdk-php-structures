<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeCustomVocabularyMetadata;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 * @property 'Ready'|'Deleting'|'Exporting'|'Importing'|'Creating' $customVocabularyStatus
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 */
class DescribeCustomVocabularyMetadataResponse extends Response
{
}
