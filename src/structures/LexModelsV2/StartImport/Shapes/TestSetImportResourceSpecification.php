<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\StartImport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $testSetName
 * @property string $description
 * @property string $roleArn
 * @property TestSetStorageLocation $storageLocation
 * @property TestSetImportInputLocation $importInputLocation
 * @property 'Text'|'Audio' $modality
 * @property array<string, string> $testSetTags
 */
class TestSetImportResourceSpecification extends Shape
{
    /**
     * @param array{
     *     testSetName: string,
     *     description?: string,
     *     roleArn: string,
     *     storageLocation: TestSetStorageLocation,
     *     importInputLocation: TestSetImportInputLocation,
     *     modality: 'Text'|'Audio',
     *     testSetTags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
