<?php

namespace Sunaoka\Aws\Structures\MigrationHub\ListCreatedArtifacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string|null $Description
 */
class CreatedArtifact extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
