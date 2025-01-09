<?php

namespace Sunaoka\Aws\Structures\MigrationHub\AssociateSourceResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Description
 * @property string $StatusDetail
 */
class SourceResource extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     StatusDetail?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
