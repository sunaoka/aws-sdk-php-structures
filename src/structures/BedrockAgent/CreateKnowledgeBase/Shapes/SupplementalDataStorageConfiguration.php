<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SupplementalDataStorageLocation> $storageLocations
 */
class SupplementalDataStorageConfiguration extends Shape
{
    /**
     * @param array{storageLocations: list<SupplementalDataStorageLocation>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
