<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\StartTestSetGeneration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $testSetName
 * @property string|null $description
 * @property Shapes\TestSetStorageLocation $storageLocation
 * @property Shapes\TestSetGenerationDataSource $generationDataSource
 * @property string $roleArn
 * @property array<string, string>|null $testSetTags
 */
class StartTestSetGenerationRequest extends Request
{
    /**
     * @param array{
     *     testSetName: string,
     *     description?: string|null,
     *     storageLocation: Shapes\TestSetStorageLocation,
     *     generationDataSource: Shapes\TestSetGenerationDataSource,
     *     roleArn: string,
     *     testSetTags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
