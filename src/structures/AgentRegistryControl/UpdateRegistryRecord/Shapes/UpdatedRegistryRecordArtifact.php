<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\UpdateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RegistryRecordArtifactUpload|null $optionalValue
 */
class UpdatedRegistryRecordArtifact extends Shape
{
    /**
     * @param array{optionalValue?: RegistryRecordArtifactUpload|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
