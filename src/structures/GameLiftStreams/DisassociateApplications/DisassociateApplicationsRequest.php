<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\DisassociateApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property list<string> $ApplicationIdentifiers
 */
class DisassociateApplicationsRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     ApplicationIdentifiers: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
