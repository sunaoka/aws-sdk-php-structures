<?php

namespace Sunaoka\Aws\Structures\ImportExport\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property string $URL
 */
class Artifact extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     URL?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
