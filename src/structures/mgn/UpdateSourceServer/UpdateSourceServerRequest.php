<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateSourceServer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $accountID
 * @property Shapes\SourceServerConnectorAction|null $connectorAction
 * @property string $sourceServerID
 */
class UpdateSourceServerRequest extends Request
{
    /**
     * @param array{
     *     accountID?: string|null,
     *     connectorAction?: Shapes\SourceServerConnectorAction|null,
     *     sourceServerID: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
