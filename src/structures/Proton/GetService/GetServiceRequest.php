<?php

namespace Sunaoka\Aws\Structures\Proton\GetService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class GetServiceRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
