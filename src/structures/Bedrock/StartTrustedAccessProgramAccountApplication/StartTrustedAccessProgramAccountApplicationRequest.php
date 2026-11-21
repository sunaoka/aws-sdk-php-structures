<?php

namespace Sunaoka\Aws\Structures\Bedrock\StartTrustedAccessProgramAccountApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $programIdentifier
 */
class StartTrustedAccessProgramAccountApplicationRequest extends Request
{
    /**
     * @param array{programIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
