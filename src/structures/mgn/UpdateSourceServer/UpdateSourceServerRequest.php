<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateSourceServer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $accountID
 * @property string $sourceServerID
 * @property Shapes\SourceServerConnectorAction|null $connectorAction
 */
class UpdateSourceServerRequest extends Request
{
    /**
     * @param array{
     *     accountID?: string|null,
     *     sourceServerID: string,
     *     connectorAction?: Shapes\SourceServerConnectorAction|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
