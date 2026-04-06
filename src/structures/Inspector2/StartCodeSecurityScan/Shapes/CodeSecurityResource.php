<?php

namespace Sunaoka\Aws\Structures\Inspector2\StartCodeSecurityScan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $projectId
 */
class CodeSecurityResource extends Shape
{
    /**
     * @param array{projectId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
