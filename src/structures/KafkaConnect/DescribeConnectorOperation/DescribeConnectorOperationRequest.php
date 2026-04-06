<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DescribeConnectorOperation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectorOperationArn
 */
class DescribeConnectorOperationRequest extends Request
{
    /**
     * @param array{connectorOperationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
