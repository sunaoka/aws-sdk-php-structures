<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetInvestigation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property string $InvestigationId
 * @property 'STRING'|'STRUCTURED'|null $SummaryFormat
 */
class GetInvestigationRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     InvestigationId: string,
     *     SummaryFormat?: 'STRING'|'STRUCTURED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
