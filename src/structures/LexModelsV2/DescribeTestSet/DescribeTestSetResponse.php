<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeTestSet;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $testSetId
 * @property string|null $testSetName
 * @property string|null $description
 * @property 'Text'|'Audio'|null $modality
 * @property 'Importing'|'PendingAnnotation'|'Deleting'|'ValidationError'|'Ready'|null $status
 * @property string|null $roleArn
 * @property int|null $numTurns
 * @property Shapes\TestSetStorageLocation|null $storageLocation
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 */
class DescribeTestSetResponse extends Response
{
}
