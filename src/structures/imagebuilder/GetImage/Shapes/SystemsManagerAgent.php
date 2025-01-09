<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $uninstallAfterBuild
 */
class SystemsManagerAgent extends Shape
{
    /**
     * @param array{uninstallAfterBuild?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
