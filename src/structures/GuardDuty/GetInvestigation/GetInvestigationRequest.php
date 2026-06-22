<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetInvestigation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property string $InvestigationId
 */
class GetInvestigationRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     InvestigationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
