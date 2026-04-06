<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\PrepareFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $flowIdentifier
 */
class PrepareFlowRequest extends Request
{
    /**
     * @param array{flowIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
