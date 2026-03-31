<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DeleteRcsAgent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RcsAgentId
 */
class DeleteRcsAgentRequest extends Request
{
    /**
     * @param array{RcsAgentId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
