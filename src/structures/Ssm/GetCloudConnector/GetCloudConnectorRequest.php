<?php

namespace Sunaoka\Aws\Structures\Ssm\GetCloudConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CloudConnectorId
 */
class GetCloudConnectorRequest extends Request
{
    /**
     * @param array{CloudConnectorId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
