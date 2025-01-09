<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectorId
 */
class DescribeConnectorRequest extends Request
{
    /**
     * @param array{ConnectorId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
