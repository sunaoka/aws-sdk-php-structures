<?php

namespace Sunaoka\Aws\Structures\Billing\ListContractualInvestmentAttestations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $contractArn
 * @property string|null $investmentSummaryId
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListContractualInvestmentAttestationsRequest extends Request
{
    /**
     * @param array{
     *     contractArn: string,
     *     investmentSummaryId?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
