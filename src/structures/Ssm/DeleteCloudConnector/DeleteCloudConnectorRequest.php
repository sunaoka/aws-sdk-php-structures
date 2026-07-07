<?php

namespace Sunaoka\Aws\Structures\Ssm\DeleteCloudConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CloudConnectorId
 */
class DeleteCloudConnectorRequest extends Request
{
    /**
     * @param array{CloudConnectorId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
