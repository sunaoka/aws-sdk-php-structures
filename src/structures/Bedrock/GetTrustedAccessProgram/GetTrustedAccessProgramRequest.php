<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetTrustedAccessProgram;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $programIdentifier
 * @property string|null $projectIdentifier
 */
class GetTrustedAccessProgramRequest extends Request
{
    /**
     * @param array{
     *     programIdentifier: string,
     *     projectIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
