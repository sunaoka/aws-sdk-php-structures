<?php

namespace Sunaoka\Aws\Structures\Appflow\UnregisterConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectorLabel
 * @property bool|null $forceDelete
 */
class UnregisterConnectorRequest extends Request
{
    /**
     * @param array{
     *     connectorLabel: string,
     *     forceDelete?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
