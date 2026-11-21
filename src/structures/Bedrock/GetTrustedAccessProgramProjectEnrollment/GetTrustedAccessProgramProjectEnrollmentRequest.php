<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetTrustedAccessProgramProjectEnrollment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $programIdentifier
 * @property string $projectIdentifier
 */
class GetTrustedAccessProgramProjectEnrollmentRequest extends Request
{
    /**
     * @param array{
     *     programIdentifier: string,
     *     projectIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
