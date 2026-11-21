<?php

namespace Sunaoka\Aws\Structures\Bedrock\PutTrustedAccessProgramProjectEnrollment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $programIdentifier
 * @property string $projectIdentifier
 * @property 'inherit'|'enabled'|'disabled' $optIn
 */
class PutTrustedAccessProgramProjectEnrollmentRequest extends Request
{
    /**
     * @param array{
     *     programIdentifier: string,
     *     projectIdentifier: string,
     *     optIn: 'inherit'|'enabled'|'disabled'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
