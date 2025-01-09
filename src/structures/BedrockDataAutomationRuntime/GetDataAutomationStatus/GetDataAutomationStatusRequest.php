<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomationRuntime\GetDataAutomationStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $invocationArn
 */
class GetDataAutomationStatusRequest extends Request
{
    /**
     * @param array{invocationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
