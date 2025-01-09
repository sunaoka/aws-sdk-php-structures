<?php

namespace Sunaoka\Aws\Structures\Proton\GetComponent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class GetComponentRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
