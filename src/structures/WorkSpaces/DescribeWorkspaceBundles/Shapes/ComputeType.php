<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaceBundles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VALUE'|'STANDARD'|'PERFORMANCE'|'POWER'|'GRAPHICS'|'POWERPRO'|'GRAPHICSPRO'|'GRAPHICS_G4DN'|'GRAPHICSPRO_G4DN'|null $Name
 */
class ComputeType extends Shape
{
    /**
     * @param array{Name?: 'VALUE'|'STANDARD'|'PERFORMANCE'|'POWER'|'GRAPHICS'|'POWERPRO'|'GRAPHICSPRO'|'GRAPHICS_G4DN'|'GRAPHICSPRO_G4DN'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
