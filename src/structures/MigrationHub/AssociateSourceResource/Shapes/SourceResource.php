<?php

namespace Sunaoka\Aws\Structures\MigrationHub\AssociateSourceResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string|null $Description
 * @property string|null $StatusDetail
 */
class SourceResource extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     StatusDetail?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
