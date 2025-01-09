<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeTestSetGeneration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $testSetGenerationId
 * @property 'Generating'|'Ready'|'Failed'|'Pending' $testSetGenerationStatus
 * @property list<string> $failureReasons
 * @property string $testSetId
 * @property string $testSetName
 * @property string $description
 * @property Shapes\TestSetStorageLocation $storageLocation
 * @property Shapes\TestSetGenerationDataSource $generationDataSource
 * @property string $roleArn
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 */
class DescribeTestSetGenerationResponse extends Response
{
}
