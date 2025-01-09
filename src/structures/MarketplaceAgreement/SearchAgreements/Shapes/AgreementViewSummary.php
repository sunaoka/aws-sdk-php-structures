<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\SearchAgreements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $acceptanceTime
 * @property Acceptor $acceptor
 * @property string $agreementId
 * @property string $agreementType
 * @property \Aws\Api\DateTimeResult $endTime
 * @property ProposalSummary $proposalSummary
 * @property Proposer $proposer
 * @property \Aws\Api\DateTimeResult $startTime
 * @property 'ACTIVE'|'ARCHIVED'|'CANCELLED'|'EXPIRED'|'RENEWED'|'REPLACED'|'ROLLED_BACK'|'SUPERSEDED'|'TERMINATED' $status
 */
class AgreementViewSummary extends Shape
{
    /**
     * @param array{
     *     acceptanceTime?: \Aws\Api\DateTimeResult,
     *     acceptor?: Acceptor,
     *     agreementId?: string,
     *     agreementType?: string,
     *     endTime?: \Aws\Api\DateTimeResult,
     *     proposalSummary?: ProposalSummary,
     *     proposer?: Proposer,
     *     startTime?: \Aws\Api\DateTimeResult,
     *     status?: 'ACTIVE'|'ARCHIVED'|'CANCELLED'|'EXPIRED'|'RENEWED'|'REPLACED'|'ROLLED_BACK'|'SUPERSEDED'|'TERMINATED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
