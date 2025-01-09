<?php

namespace Sunaoka\Aws\Structures\MigrationHub\AssociateCreatedArtifact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Description
 */
class CreatedArtifact extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
