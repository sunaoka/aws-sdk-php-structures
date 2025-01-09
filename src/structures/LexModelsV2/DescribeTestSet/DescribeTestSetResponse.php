<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeTestSet;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $testSetId
 * @property string $testSetName
 * @property string $description
 * @property 'Text'|'Audio' $modality
 * @property 'Importing'|'PendingAnnotation'|'Deleting'|'ValidationError'|'Ready' $status
 * @property string $roleArn
 * @property int $numTurns
 * @property Shapes\TestSetStorageLocation $storageLocation
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 */
class DescribeTestSetResponse extends Response
{
}
