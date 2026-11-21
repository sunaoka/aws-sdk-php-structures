<?php

namespace Sunaoka\Aws\Structures\Bedrock\PutTrustedAccessProgramAccountEnrollment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $programIdentifier
 * @property 'inherit'|'enabled'|'disabled' $optIn
 */
class PutTrustedAccessProgramAccountEnrollmentRequest extends Request
{
    /**
     * @param array{
     *     programIdentifier: string,
     *     optIn: 'inherit'|'enabled'|'disabled'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
