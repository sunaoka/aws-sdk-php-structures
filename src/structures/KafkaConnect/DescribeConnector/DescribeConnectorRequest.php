<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DescribeConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectorArn
 */
class DescribeConnectorRequest extends Request
{
    /**
     * @param array{connectorArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
