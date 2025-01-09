<?php

namespace Sunaoka\Aws\Structures\Proton\DeleteService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class DeleteServiceRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
