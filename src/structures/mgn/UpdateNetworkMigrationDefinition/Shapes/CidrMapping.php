<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateNetworkMigrationDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $originalCidr
 * @property string $updatedCidr
 */
class CidrMapping extends Shape
{
    /**
     * @param array{
     *     originalCidr: string,
     *     updatedCidr: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
