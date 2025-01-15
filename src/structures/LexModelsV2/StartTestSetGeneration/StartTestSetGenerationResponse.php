<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\StartTestSetGeneration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $testSetGenerationId
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property 'Generating'|'Ready'|'Failed'|'Pending'|null $testSetGenerationStatus
 * @property string|null $testSetName
 * @property string|null $description
 * @property Shapes\TestSetStorageLocation|null $storageLocation
 * @property Shapes\TestSetGenerationDataSource|null $generationDataSource
 * @property string|null $roleArn
 * @property array<string, string>|null $testSetTags
 */
class StartTestSetGenerationResponse extends Response
{
}
