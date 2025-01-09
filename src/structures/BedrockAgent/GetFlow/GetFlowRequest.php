<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $flowIdentifier
 */
class GetFlowRequest extends Request
{
    /**
     * @param array{flowIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
