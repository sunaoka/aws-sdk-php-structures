<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\GetResourceExplorerSetup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FilterString
 */
class SearchFilter extends Shape
{
    /**
     * @param array{FilterString: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
