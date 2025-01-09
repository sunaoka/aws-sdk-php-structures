<?php

namespace Sunaoka\Aws\Structures\AppRunner\DeleteService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceArn
 */
class DeleteServiceRequest extends Request
{
    /**
     * @param array{ServiceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
