<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\ResumeConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectorArn
 */
class ResumeConnectorRequest extends Request
{
    /**
     * @param array{connectorArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
