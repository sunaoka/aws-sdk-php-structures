<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCodeSecurityScanConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALL'|null $projectSelectionScope
 */
class ScopeSettings extends Shape
{
    /**
     * @param array{projectSelectionScope?: 'ALL'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
