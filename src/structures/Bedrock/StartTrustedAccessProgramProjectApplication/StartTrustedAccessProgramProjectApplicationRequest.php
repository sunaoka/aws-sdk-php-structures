<?php

namespace Sunaoka\Aws\Structures\Bedrock\StartTrustedAccessProgramProjectApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $programIdentifier
 * @property string $projectIdentifier
 */
class StartTrustedAccessProgramProjectApplicationRequest extends Request
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
