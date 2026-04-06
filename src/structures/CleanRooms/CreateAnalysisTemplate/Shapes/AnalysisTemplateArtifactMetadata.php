<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateAnalysisTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Hash $entryPointHash
 * @property list<Hash>|null $additionalArtifactHashes
 */
class AnalysisTemplateArtifactMetadata extends Shape
{
    /**
     * @param array{
     *     entryPointHash: Hash,
     *     additionalArtifactHashes?: list<Hash>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
