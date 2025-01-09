<?php

namespace Sunaoka\Aws\Structures\MTurk\SendBonus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkerId
 * @property string $BonusAmount
 * @property string $AssignmentId
 * @property string $Reason
 * @property string $UniqueRequestToken
 */
class SendBonusRequest extends Request
{
    /**
     * @param array{
     *     WorkerId: string,
     *     BonusAmount: string,
     *     AssignmentId: string,
     *     Reason: string,
     *     UniqueRequestToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
