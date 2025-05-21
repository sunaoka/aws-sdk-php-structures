<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\AssociateApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ApplicationIdentifiers
 * @property string $Identifier
 */
class AssociateApplicationsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationIdentifiers: list<string>,
     *     Identifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
