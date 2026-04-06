<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetRemainingFreeTrialDays;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property list<string>|null $AccountIds
 */
class GetRemainingFreeTrialDaysRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     AccountIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
