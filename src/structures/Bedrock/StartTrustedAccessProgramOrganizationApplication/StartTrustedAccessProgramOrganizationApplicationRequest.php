<?php

namespace Sunaoka\Aws\Structures\Bedrock\StartTrustedAccessProgramOrganizationApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $programIdentifier
 */
class StartTrustedAccessProgramOrganizationApplicationRequest extends Request
{
    /**
     * @param array{programIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
