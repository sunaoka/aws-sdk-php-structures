<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeTestSetGeneration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $testSetGenerationId
 * @property 'Generating'|'Ready'|'Failed'|'Pending'|null $testSetGenerationStatus
 * @property list<string>|null $failureReasons
 * @property string|null $testSetId
 * @property string|null $testSetName
 * @property string|null $description
 * @property Shapes\TestSetStorageLocation|null $storageLocation
 * @property Shapes\TestSetGenerationDataSource|null $generationDataSource
 * @property string|null $roleArn
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 */
class DescribeTestSetGenerationResponse extends Response
{
}
