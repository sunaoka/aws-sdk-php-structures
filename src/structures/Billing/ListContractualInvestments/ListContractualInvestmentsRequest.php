<?php

namespace Sunaoka\Aws\Structures\Billing\ListContractualInvestments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $contractArn
 * @property string $investmentSummaryId
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListContractualInvestmentsRequest extends Request
{
    /**
     * @param array{
     *     contractArn: string,
     *     investmentSummaryId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
