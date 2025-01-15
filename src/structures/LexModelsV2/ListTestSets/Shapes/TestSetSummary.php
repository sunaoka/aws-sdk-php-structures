<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $testSetId
 * @property string|null $testSetName
 * @property string|null $description
 * @property 'Text'|'Audio'|null $modality
 * @property 'Importing'|'PendingAnnotation'|'Deleting'|'ValidationError'|'Ready'|null $status
 * @property string|null $roleArn
 * @property int|null $numTurns
 * @property TestSetStorageLocation|null $storageLocation
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 */
class TestSetSummary extends Shape
{
    /**
     * @param array{
     *     testSetId?: string|null,
     *     testSetName?: string|null,
     *     description?: string|null,
     *     modality?: 'Text'|'Audio'|null,
     *     status?: 'Importing'|'PendingAnnotation'|'Deleting'|'ValidationError'|'Ready'|null,
     *     roleArn?: string|null,
     *     numTurns?: int|null,
     *     storageLocation?: TestSetStorageLocation|null,
     *     creationDateTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
