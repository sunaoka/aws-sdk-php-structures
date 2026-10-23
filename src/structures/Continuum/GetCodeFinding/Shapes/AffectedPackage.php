<?php

namespace Sunaoka\Aws\Structures\Continuum\GetCodeFinding\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $version
 * @property string|null $fixedInVersion
 * @property string|null $packageManager
 */
class AffectedPackage extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     version?: string|null,
     *     fixedInVersion?: string|null,
     *     packageManager?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
