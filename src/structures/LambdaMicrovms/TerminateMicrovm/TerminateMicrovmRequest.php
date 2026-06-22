<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\TerminateMicrovm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $microvmIdentifier
 */
class TerminateMicrovmRequest extends Request
{
    /**
     * @param array{microvmIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
