<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\StartTestSetGeneration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $testSetName
 * @property string $description
 * @property Shapes\TestSetStorageLocation $storageLocation
 * @property Shapes\TestSetGenerationDataSource $generationDataSource
 * @property string $roleArn
 * @property array<string, string> $testSetTags
 */
class StartTestSetGenerationRequest extends Request
{
    /**
     * @param array{
     *     testSetName: string,
     *     description?: string,
     *     storageLocation: Shapes\TestSetStorageLocation,
     *     generationDataSource: Shapes\TestSetGenerationDataSource,
     *     roleArn: string,
     *     testSetTags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
