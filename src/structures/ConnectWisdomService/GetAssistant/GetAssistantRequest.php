<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\GetAssistant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 */
class GetAssistantRequest extends Request
{
    /**
     * @param array{assistantId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
