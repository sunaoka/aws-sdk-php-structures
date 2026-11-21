<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetTrustedAccessProgramAccountEnrollment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $programIdentifier
 */
class GetTrustedAccessProgramAccountEnrollmentRequest extends Request
{
    /**
     * @param array{programIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
