<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\DeleteAssistant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 */
class DeleteAssistantRequest extends Request
{
    /**
     * @param array{assistantId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
