<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\StartTestSetGeneration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $testSetGenerationId
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property 'Generating'|'Ready'|'Failed'|'Pending' $testSetGenerationStatus
 * @property string $testSetName
 * @property string $description
 * @property Shapes\TestSetStorageLocation $storageLocation
 * @property Shapes\TestSetGenerationDataSource $generationDataSource
 * @property string $roleArn
 * @property array<string, string> $testSetTags
 */
class StartTestSetGenerationResponse extends Response
{
}
