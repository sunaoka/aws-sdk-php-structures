<?php

namespace Sunaoka\Aws\Structures\Deadline\DisassociateMemberFromFarm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $principalId
 */
class DisassociateMemberFromFarmRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     principalId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
