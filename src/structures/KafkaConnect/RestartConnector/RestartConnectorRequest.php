<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\RestartConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectorArn
 * @property bool|null $onlyFailedTasks
 */
class RestartConnectorRequest extends Request
{
    /**
     * @param array{
     *     connectorArn: string,
     *     onlyFailedTasks?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
