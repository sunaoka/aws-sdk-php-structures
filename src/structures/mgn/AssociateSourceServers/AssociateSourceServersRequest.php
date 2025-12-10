<?php

namespace Sunaoka\Aws\Structures\mgn\AssociateSourceServers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationID
 * @property list<string> $sourceServerIDs
 * @property string|null $accountID
 */
class AssociateSourceServersRequest extends Request
{
    /**
     * @param array{
     *     applicationID: string,
     *     sourceServerIDs: list<string>,
     *     accountID?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
