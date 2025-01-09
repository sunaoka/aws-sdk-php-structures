<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateSourceServer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountID
 * @property Shapes\SourceServerConnectorAction $connectorAction
 * @property string $sourceServerID
 */
class UpdateSourceServerRequest extends Request
{
    /**
     * @param array{
     *     accountID?: string,
     *     connectorAction?: Shapes\SourceServerConnectorAction,
     *     sourceServerID: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
