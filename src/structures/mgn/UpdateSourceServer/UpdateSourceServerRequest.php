<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateSourceServer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $accountID
 * @property string $sourceServerID
 * @property Shapes\SourceServerConnectorAction|null $connectorAction
 * @property string|null $userProvidedID
 * @property string|null $fqdnForActionFramework
 * @property string|null $platform
 */
class UpdateSourceServerRequest extends Request
{
    /**
     * @param array{
     *     accountID?: string|null,
     *     sourceServerID: string,
     *     connectorAction?: Shapes\SourceServerConnectorAction|null,
     *     userProvidedID?: string|null,
     *     fqdnForActionFramework?: string|null,
     *     platform?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
