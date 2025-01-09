<?php

namespace Sunaoka\Aws\Structures\GuardDuty\DeleteIPSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property string $IpSetId
 */
class DeleteIPSetRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     IpSetId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
