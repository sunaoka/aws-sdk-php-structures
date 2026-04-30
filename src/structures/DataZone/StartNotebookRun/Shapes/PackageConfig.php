<?php

namespace Sunaoka\Aws\Structures\DataZone\StartNotebookRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'UV' $packageManager
 * @property string|null $packageSpecification
 */
class PackageConfig extends Shape
{
    /**
     * @param array{
     *     packageManager: 'UV',
     *     packageSpecification?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
