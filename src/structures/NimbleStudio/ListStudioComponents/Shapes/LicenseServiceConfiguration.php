<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\ListStudioComponents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $endpoint
 */
class LicenseServiceConfiguration extends Shape
{
    /**
     * @param array{endpoint?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
