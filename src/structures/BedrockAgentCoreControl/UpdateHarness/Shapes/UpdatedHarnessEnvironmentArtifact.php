<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HarnessEnvironmentArtifact|null $optionalValue
 */
class UpdatedHarnessEnvironmentArtifact extends Shape
{
    /**
     * @param array{optionalValue?: HarnessEnvironmentArtifact|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
