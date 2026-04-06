<?php

namespace Sunaoka\Aws\Structures\mgn\DisassociateSourceServers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $accountID
 * @property string $applicationID
 * @property list<string> $sourceServerIDs
 */
class DisassociateSourceServersRequest extends Request
{
    /**
     * @param array{
     *     accountID?: string|null,
     *     applicationID: string,
     *     sourceServerIDs: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
