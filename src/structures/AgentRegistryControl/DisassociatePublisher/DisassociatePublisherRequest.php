<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\DisassociatePublisher;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $recordArn
 */
class DisassociatePublisherRequest extends Request
{
    /**
     * @param array{recordArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
