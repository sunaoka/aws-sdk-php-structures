<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\ResumeMicrovm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $microvmIdentifier
 */
class ResumeMicrovmRequest extends Request
{
    /**
     * @param array{microvmIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
