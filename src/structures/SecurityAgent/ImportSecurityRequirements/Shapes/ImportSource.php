<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ImportSecurityRequirements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SecurityRequirementArtifact>|null $documents
 */
class ImportSource extends Shape
{
    /**
     * @param array{documents?: list<SecurityRequirementArtifact>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
