<?php

namespace Sunaoka\Aws\Structures\GuardDuty\UpdateIPSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property string $IpSetId
 * @property string|null $Name
 * @property string|null $Location
 * @property bool|null $Activate
 */
class UpdateIPSetRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     IpSetId: string,
     *     Name?: string|null,
     *     Location?: string|null,
     *     Activate?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
