<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetHarness;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $harnessId
 */
class GetHarnessRequest extends Request
{
    /**
     * @param array{harnessId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
