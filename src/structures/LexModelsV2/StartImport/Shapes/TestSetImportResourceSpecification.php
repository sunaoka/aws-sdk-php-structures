<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\StartImport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $testSetName
 * @property string|null $description
 * @property string $roleArn
 * @property TestSetStorageLocation $storageLocation
 * @property TestSetImportInputLocation $importInputLocation
 * @property 'Text'|'Audio' $modality
 * @property array<string, string>|null $testSetTags
 */
class TestSetImportResourceSpecification extends Shape
{
    /**
     * @param array{
     *     testSetName: string,
     *     description?: string|null,
     *     roleArn: string,
     *     storageLocation: TestSetStorageLocation,
     *     importInputLocation: TestSetImportInputLocation,
     *     modality: 'Text'|'Audio',
     *     testSetTags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
