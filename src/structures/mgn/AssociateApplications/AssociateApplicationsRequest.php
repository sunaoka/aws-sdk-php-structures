<?php

namespace Sunaoka\Aws\Structures\mgn\AssociateApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountID
 * @property list<string> $applicationIDs
 * @property string $waveID
 */
class AssociateApplicationsRequest extends Request
{
    /**
     * @param array{
     *     accountID?: string,
     *     applicationIDs: list<string>,
     *     waveID: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
