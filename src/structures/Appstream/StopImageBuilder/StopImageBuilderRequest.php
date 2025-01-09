<?php

namespace Sunaoka\Aws\Structures\Appstream\StopImageBuilder;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class StopImageBuilderRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
