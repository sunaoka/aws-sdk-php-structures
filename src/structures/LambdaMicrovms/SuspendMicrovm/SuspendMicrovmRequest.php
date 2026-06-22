<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\SuspendMicrovm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $microvmIdentifier
 */
class SuspendMicrovmRequest extends Request
{
    /**
     * @param array{microvmIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
