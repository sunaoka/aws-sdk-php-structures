<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\GetMicrovm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $microvmIdentifier
 */
class GetMicrovmRequest extends Request
{
    /**
     * @param array{microvmIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
