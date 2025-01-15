<?php

namespace Sunaoka\Aws\Structures\ImportExport\UpdateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property string|null $URL
 */
class Artifact extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     URL?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
