<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\GetBlueprintOptimizationStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $invocationArn
 */
class GetBlueprintOptimizationStatusRequest extends Request
{
    /**
     * @param array{invocationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
