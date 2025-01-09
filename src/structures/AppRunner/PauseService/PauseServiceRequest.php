<?php

namespace Sunaoka\Aws\Structures\AppRunner\PauseService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceArn
 */
class PauseServiceRequest extends Request
{
    /**
     * @param array{ServiceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
