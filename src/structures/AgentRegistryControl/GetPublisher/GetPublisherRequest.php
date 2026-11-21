<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\GetPublisher;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $publisherArn
 */
class GetPublisherRequest extends Request
{
    /**
     * @param array{publisherArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
