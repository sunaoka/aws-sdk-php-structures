<?php

namespace Sunaoka\Aws\Structures\GuardDuty\UpdateIPSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property string $IpSetId
 * @property string $Name
 * @property string $Location
 * @property bool $Activate
 */
class UpdateIPSetRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     IpSetId: string,
     *     Name?: string,
     *     Location?: string,
     *     Activate?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
