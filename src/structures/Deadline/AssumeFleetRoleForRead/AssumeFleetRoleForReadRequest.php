<?php

namespace Sunaoka\Aws\Structures\Deadline\AssumeFleetRoleForRead;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $fleetId
 */
class AssumeFleetRoleForReadRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     fleetId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
