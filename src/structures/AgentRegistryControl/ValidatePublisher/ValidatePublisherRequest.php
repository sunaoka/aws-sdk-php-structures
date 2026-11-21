<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\ValidatePublisher;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $publisherArn
 */
class ValidatePublisherRequest extends Request
{
    /**
     * @param array{publisherArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
