<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListImports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $importId
 * @property string|null $importedResourceId
 * @property string|null $importedResourceName
 * @property 'InProgress'|'Completed'|'Failed'|'Deleting'|null $importStatus
 * @property 'Overwrite'|'FailOnConflict'|'Append'|null $mergeStrategy
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 * @property 'Bot'|'BotLocale'|'CustomVocabulary'|'TestSet'|null $importedResourceType
 */
class ImportSummary extends Shape
{
    /**
     * @param array{
     *     importId?: string|null,
     *     importedResourceId?: string|null,
     *     importedResourceName?: string|null,
     *     importStatus?: 'InProgress'|'Completed'|'Failed'|'Deleting'|null,
     *     mergeStrategy?: 'Overwrite'|'FailOnConflict'|'Append'|null,
     *     creationDateTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult|null,
     *     importedResourceType?: 'Bot'|'BotLocale'|'CustomVocabulary'|'TestSet'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
