<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListImports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $importId
 * @property string $importedResourceId
 * @property string $importedResourceName
 * @property 'InProgress'|'Completed'|'Failed'|'Deleting' $importStatus
 * @property 'Overwrite'|'FailOnConflict'|'Append' $mergeStrategy
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 * @property 'Bot'|'BotLocale'|'CustomVocabulary'|'TestSet' $importedResourceType
 */
class ImportSummary extends Shape
{
    /**
     * @param array{
     *     importId?: string,
     *     importedResourceId?: string,
     *     importedResourceName?: string,
     *     importStatus?: 'InProgress'|'Completed'|'Failed'|'Deleting',
     *     mergeStrategy?: 'Overwrite'|'FailOnConflict'|'Append',
     *     creationDateTime?: \Aws\Api\DateTimeResult,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult,
     *     importedResourceType?: 'Bot'|'BotLocale'|'CustomVocabulary'|'TestSet'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
