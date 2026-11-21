<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetTrustedAccessProgramOrganizationEnrollment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $programIdentifier
 */
class GetTrustedAccessProgramOrganizationEnrollmentRequest extends Request
{
    /**
     * @param array{programIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
