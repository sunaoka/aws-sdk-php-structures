<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetABTest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $abTestId
 */
class GetABTestRequest extends Request
{
    /**
     * @param array{abTestId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
