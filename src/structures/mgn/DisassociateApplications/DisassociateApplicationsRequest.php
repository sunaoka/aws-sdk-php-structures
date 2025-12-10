<?php

namespace Sunaoka\Aws\Structures\mgn\DisassociateApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $waveID
 * @property list<string> $applicationIDs
 * @property string|null $accountID
 */
class DisassociateApplicationsRequest extends Request
{
    /**
     * @param array{
     *     waveID: string,
     *     applicationIDs: list<string>,
     *     accountID?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
