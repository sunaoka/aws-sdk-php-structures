<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\SearchAgreements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $acceptanceTime
 * @property Acceptor|null $acceptor
 * @property string|null $agreementId
 * @property string|null $agreementType
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property ProposalSummary|null $proposalSummary
 * @property Proposer|null $proposer
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property 'ACTIVE'|'ARCHIVED'|'CANCELLED'|'EXPIRED'|'RENEWED'|'REPLACED'|'ROLLED_BACK'|'SUPERSEDED'|'TERMINATED'|null $status
 */
class AgreementViewSummary extends Shape
{
    /**
     * @param array{
     *     acceptanceTime?: \Aws\Api\DateTimeResult|null,
     *     acceptor?: Acceptor|null,
     *     agreementId?: string|null,
     *     agreementType?: string|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     proposalSummary?: ProposalSummary|null,
     *     proposer?: Proposer|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     status?: 'ACTIVE'|'ARCHIVED'|'CANCELLED'|'EXPIRED'|'RENEWED'|'REPLACED'|'ROLLED_BACK'|'SUPERSEDED'|'TERMINATED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
