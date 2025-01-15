<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $uninstallAfterBuild
 */
class SystemsManagerAgent extends Shape
{
    /**
     * @param array{uninstallAfterBuild?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
