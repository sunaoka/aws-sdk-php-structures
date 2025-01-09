<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $testSetId
 * @property string $testSetName
 * @property string $description
 * @property 'Text'|'Audio' $modality
 * @property 'Importing'|'PendingAnnotation'|'Deleting'|'ValidationError'|'Ready' $status
 * @property string $roleArn
 * @property int $numTurns
 * @property TestSetStorageLocation $storageLocation
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 */
class TestSetSummary extends Shape
{
    /**
     * @param array{
     *     testSetId?: string,
     *     testSetName?: string,
     *     description?: string,
     *     modality?: 'Text'|'Audio',
     *     status?: 'Importing'|'PendingAnnotation'|'Deleting'|'ValidationError'|'Ready',
     *     roleArn?: string,
     *     numTurns?: int,
     *     storageLocation?: TestSetStorageLocation,
     *     creationDateTime?: \Aws\Api\DateTimeResult,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
