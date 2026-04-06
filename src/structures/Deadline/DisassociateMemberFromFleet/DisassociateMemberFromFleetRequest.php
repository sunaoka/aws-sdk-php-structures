<?php

namespace Sunaoka\Aws\Structures\Deadline\DisassociateMemberFromFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $fleetId
 * @property string $principalId
 */
class DisassociateMemberFromFleetRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     fleetId: string,
     *     principalId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
