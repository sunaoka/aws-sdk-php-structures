<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\DeletePublisher;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $publisherArn
 */
class DeletePublisherRequest extends Request
{
    /**
     * @param array{publisherArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
