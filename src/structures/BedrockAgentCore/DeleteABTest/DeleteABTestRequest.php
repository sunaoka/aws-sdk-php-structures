<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\DeleteABTest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $abTestId
 */
class DeleteABTestRequest extends Request
{
    /**
     * @param array{abTestId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
